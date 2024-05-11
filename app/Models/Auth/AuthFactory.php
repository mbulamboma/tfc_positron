<?php
 
namespace App\Models\Auth; 
use Framework\Database\Builder\QueryBuilder;
use Framework\Http\Request;
use Framework\Form\Validation as Input;
use Framework\Http\JsonResponse as Json;
use Framework\Http\Session;
use Framework\Database\PDOFactory;
use Framework\Http\Security;
/**
 * Manage the Db queries for Authentification
 *
 * @author mbula
 */
class AuthFactory{  
    const ATTEMPTS = 28;
    const DELAY = 60 * 1;

    /**
     * Authentificate a User
     */
    public static function authenticate() {
        if(!static::isLocked() && !static::loginAttempsReached()){
            if(static::areValidInputs() && static::credentialMatched()){
                static::setAuthSession();
                $response = "bien authentifié";
                echo Json::getSafeJson(['statut'=> 1, 'response'=> $response]);                         
            }else{
                static::failedAttempt();
                $response = "Mot de pass ou id incorrect";
                echo Json::getSafeJson(['statut'=> 2, 'response'=> $response]);
            }
        }else{
            if(static::loginAttempsReached()){
                static::setBruteForce();
            }
            $response = "Compte blocqué pour 30 minutes.";
            echo Json::getSafeJson(['statut'=> 2, 'response'=> $response]);
        }
    }
    /**
     * Checks wheter the inputs datas are valide
     * And the Form really belongs to our domain
     * @return bool
    */
    private static function areValidInputs() {
        $id = Request::post("id", "");
        $password = Request::post("password", "");
        return ( Security::validFormId() && Input::isLenBetween($id, 2, 80) 
            && Input::isLenBetween($password, 3, 80));         
    }
    /**
     * Checks if the Username and the password matched
     * @return bool
     */
    private static function credentialMatched() : bool {
        return count(static::getUser()) > 0;
    } 
    /**
     * Saves a failed attempts
     * @return bool
     */
    private static function failedAttempt(){
        static::getQuery()
            ->insert()
            ->into("user_login_attemp")
            ->values(["ip" => Request::getClientIp()])
            ->execute();
    }
    /**
     * Saves a brute froce in the database
     */
    private static function setBruteForce(){
        static::getQuery()
            ->insert()
            ->into("user_ip_locked")
            ->values(["ip" => Request::getClientIp()])
            ->execute(); 
    }

    /**
     * Gets The User authentificated 
     */
    private static function getUser() : array{ 
        return static::getQuery()
                        ->from("users")
                        ->select()
                        ->where("(email = :id AND password = :password AND activated = TRUE)")
                        ->setParameters(["id" => Request::post("id", ""), "password" => md5(Request::post("password", ""))])
                        ->execute();
    }
    /**
     * Return true if Login attemps is greater than 10 over the last 10 minutes
     * @return boolean
     */
    private function loginAttempsReached() : bool {
        return static::countFailedAttemps()['attemps'] >= AuthFactory::ATTEMPTS;
    }
    /**
     * Checks if the user is locked for 30 minutes
     * @return bool
     */
    public function isLocked() : bool { 
        return time() < (static::lastLockTime()['lastlock']+ AuthFactory::DELAY);
    } 
    /**
     * Connctes to 
     * @return QueryBuilder
     */
    private static function getQuery(){
        return new QueryBuilder(new PDOFactory());
    }
    
    /**
     * Counts Failed Logins
     */
    private static function countFailedAttemps() : array{ 
        return static::getQuery()
                        ->from("user_login_attemp")
                        ->select("count(*)", "attemps") 
                        ->where("((unix_timestamp(attempted_at) > :delay) AND ip = :ip)")
                        ->setParameter("delay", time() - AuthFactory::DELAY)
                        ->setParameter("ip", Request::getClientIp())
                        ->execute()[0];
    } 
    /**
     * Gets the last locked Time
     * @return array
     */
    private static function lastLockTime(){
        return static::getQuery()
                ->select("unix_timestamp(MAX(locked_at))", "lastlock")
                ->from("user_ip_locked")
                ->where("ip = :ip")
                ->setParameters(["ip" => Request::getClientIp()])
                ->execute()[0];
    } 
    /**
     * Sets Authentificaion Sessions Infos
     * And regenerate the session id and the app initialisation
     */
    private static function setAuthSession() { 
        @session_regenerate_id();
        $user = static::getUser()[0];  
        Session::set("username", $user['username']);
        Session::set("email", $user['email']);
        Session::set("user-token", $user['user_token']);
    }
    
} 