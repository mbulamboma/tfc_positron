<?php

namespace App\Models\Register;
use Framework\Http\Captcha; 
use Framework\Form\Validation as Input;
use Framework\Http\JsonResponse as Json;
use Framework\Database\Builder\QueryBuilder;
use Framework\Http\Request;
use Framework\Database\PDOFactory;
use Framework\Http\Session;
/**
 * Sign up main functions
 *
 * @author mbula
 */
class SignUp {
    static $userToken;
    /**
     * Register a User in the Database
     */ 
    public static function register() {  
        Captcha::checkAndExecute(function(){
                            static::success();
                        }, function(){
                            static::failed();
                        }); 
    }
    /**
     * Checks if inputs are corrects and save the user in Database
     */
    static function success() { 
        if(static::areValidInputs() && !static::alreadyExist()){
            static::saveUser(); 
            static::setAuthSession();
            echo Json::getSafeJson(['statut'=> 1,'location'=> "/verify", 'response'=> "Vous êtes Bien enregistré"]);  
        }
        else{
            echo Json::getSafeJson(['statut'=> 2, 'response'=> " Vérifiez que tous les champs sont bien remplis"]);  
        } 
    }
    /**
     * Tells the user that recaptcha did not worked correctly
     */
    static function failed() {
        echo Json::getSafeJson(['statut'=> 2, 'response'=> "Erreur de Connexion, Veuillez reessayer plutard."]);  
    }
    
    /**
     * Checks wheter the inputs datas are valide 
     * @return bool
    */
    private static function areValidInputs() {
        $name = Request::post("username", "");
        $email = Request::post("email", "");
        $password = Request::post("password", ""); 
        return (Input::isEmail($email)  && Input::isLenBetween($name, 3, 100) 
            && Input::isLenBetween($password, 3, 100));         
    }
    /**
     * Checks if the user exist already
     * @return bool
     */
    private static function alreadyExist() : bool {
        return count(static::getUser()) > 0;
    } 
    /**
     * Checks if a user in the system have already used this email adress 
     */
    private static function getUser() : array{ 
        return static::getQuery()
                        ->from("users")
                        ->select()
                        ->where("email = :email")
                        ->setParameters(["email" => Request::post("email", "")])
                        ->execute();
    }
    
    /**
     * Saves the user in the database
     */
    private static function saveUser(){
        static::$userToken = strtoupper(md5(time()));
        static::getQuery()
            ->insert()
            ->into("users")
            ->values(["auth_provider" => "server",
                      "user_token" => static::$userToken,
                      "username"  => Request::post("username", ""),
                      "email"   => Request::post("email", ""),
                      "password" => md5(Request::post("password", ""))
                ])
            ->execute(); 
    }
    
    
    /**
     * Sets Authentificaion Sessions Infos 
     */
    private static function setAuthSession() {  
        Session::set("username", Request::post("username", ""));
        Session::set("email", Request::post("email", ""));
        Session::set("user-token", static::$userToken);
    }
    /**
     * Connctes to Database
     * @return QueryBuilder
     */
    private static function getQuery(){
        return new QueryBuilder(new PDOFactory());
    }
}
