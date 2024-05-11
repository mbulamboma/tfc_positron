<?php

namespace App\Controllers;
use Framework\Templating\Controller; 
use Framework\Http\JsonResponse as Json;
use Framework\Ajax\Ajax;
use App\Models\Auth\AuthFactory as Auth;
use App\Models\Auth\FacebookAuth;
use App\Models\Register\SignUp;
use App\Models\Contents\Categories;
use \Framework\Http\Response;
/**
 * Description of MainController
 *
 * @author mbula
 */
class AuthController  extends Controller {
    /**
     * Initializing the controller
     */
    function __construct() {
        $this->data["shop_main_categories"] = Categories::mainCategories();
        $this->data["app_main_menu"] = Categories::mainMenu();
    }
 
    /**
     * Ajax request to authenticate a User
     */
    public function serverLogin() { 
        Ajax::setHeader();
        if(Ajax::validAjax()){ 
            Auth::authenticate();
        }
        else{
            echo Json::getSafeJson(['response' => "Erreur de Connexion. Veuillez reessayer plus tard."]);
            die();
        }
    }
    /**
     * Verify FacebookLogin
     */
    public function facebook_callback() {
        try{
            FacebookAuth::authenticate();
        } catch (Exception $e){
             \Framework\Http\Response::redirect("/");
        }
    }
    /**
     * Sign Up the user to the website for the very first time
     */
    public function sign_up() { 
        Ajax::setHeader();
        if(Ajax::validAjax()){ 
            SignUp::register();
        }
        else{
            echo Json::getSafeJson(['response' => "Erreur de Connexion. Veuillez reessayer plus tard."]);
            die();
        }
    }
         
    /**
     * Destroy the session
     */
    public function deconnect() {
        session_destroy();
        Response::redirect("/");
    }
}  