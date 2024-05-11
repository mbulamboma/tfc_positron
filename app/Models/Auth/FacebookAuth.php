<?php
 
namespace App\Models\Auth;
use Framework\Http\Session;
use Framework\Http\Request;
use Framework\Http\LoginFb;
use Framework\Http\Response;  
use Framework\Database\Builder\QueryBuilder; 
use Framework\Database\PDOFactory; 
/**
 * Description of FacebookAuth
 *
 * @author mbula
 */
class FacebookAuth {
    /**
     * Authenticate Via Facebook
     */
    public static function authenticate() {  
        if(!isset($_SESSION['user-token']) && static::validToken() ){
            LoginFb::fbCallBackLink();
            LoginFb::setLongLifeAccessToken();
            static::getUser();
        }else{
            Response::redirect("/");
        }
    }
         
    /**
     * Sets Authentificaion Sessions Infos
     * And regenerate the session id and the app initialisation
     */
    private static function setAuthSession($user) {   
        Session::set("username", $user['first_name'] . " ". $user['last_name'] );
        Session::set("email", $user['email']);
        Session::set("picture", $user['picture']['url']);
        Session::set("user-token", $user['id']);  
    }
    /**
     * Gets the USer from Facebook
     */
    private static function getUser() {
        try {
            $profileRequest = LoginFb::$fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,birthday,cover,picture.type(large)');
            $user = $profileRequest->getGraphNode()->asArray(); 
            static::setAuthSession($user);
            static::saveUser($user);
        } catch(FacebookResponseException $e) { 
            Response::redirect("/");
            exit;
        } catch(FacebookSDKException $e) {
            Response::redirect("/");
            exit;
        } 
        Response::redirect("/");
    }
    /**
     * Saves a User safely in the database
     * @param array $user
     */
    private static function saveUser(array $user){
        if(!static::alreadyExist($user)){
            static::saveUserInDB($user);
        }
    }
    
    /**
     * Saves the user in the database
     */
    private static function saveUserInDB(array $user){ 
        static::getQuery()
            ->insert()
            ->into("users")
            ->values(["auth_provider" => "facebook",
                      "user_token" => $user['id'],
                      "activated" => TRUE,
                      "username"  => $user['first_name'] . " ". $user['last_name'],
                      "email"   => (static::exist($user['email'])) ? $user['email'] : $user['id'],
                      "password" => md5("gil".$user['first_name'])
                ])
            ->execute(); 
    }
    /**
     * Checks if the value returned by facebook is valid
     * @param type $value
     * @return type
     */
    private static function exist($value) {
        return isset($value) && $value !== "" && $value != null;
    }

    /**
     * Checks if the user exist already
     * @return bool
     */
    private static function alreadyExist($user) : bool {
        return count(static::getUserInDB($user)) > 0;
    } 
    /**
     * Checks if a user in the system have already used this email adress 
     */
    private static function getUserInDB(array $user) : array{ 
        return static::getQuery()
                        ->from("users")
                        ->select()
                        ->where("user_token = :token")
                        ->setParameters(["token" => $user['id']])
                        ->execute();
    }
    
    /**
     * Connctes to Database
     * @return QueryBuilder
     */
    private static function getQuery(){
        return new QueryBuilder(new PDOFactory());
    }
    /**
     * Checks if the formid passed in the url matches the SessionId
     */
    private static function validToken() {
        return Session::get("form_id", "") == Request::get("formid", "");
    }
    
    
}
