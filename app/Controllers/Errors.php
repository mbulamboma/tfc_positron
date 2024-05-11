<?php
 
namespace App\Controllers;
use Framework\Templating\Controller;
use App\Models\Contents\Categories;
/*
|-------------------------------------------------------------------------------
| Never delete any of the function you find though you can modify in you will
|-------------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
* @author mbula mboma
*/
class Errors extends Controller{
    /**
     * Initializing the controller
     */
    function __construct() {
        $this->data["shop_main_categories"] = Categories::mainCategories();
        $this->data["app_main_menu"] = Categories::mainMenu();
    }
    /**
     * 404 Error not found
     */
    public function notFound() {
        $this->data["title"] = "404 PAGE NOT FOUND | Positron rdc Meilleiur distributeur de quits electronique en Rdc"; 
        $this->data["main_message"] = "Oops! 404 Page Not Found"; 
        $this->data["secondary_msg"] = "PosiTron n'a pas trouvé la page que vous chercher"; 
        
        echo $this->assemble("msg_page");
        return;
    }
    /**
     * Cookie not supported Error
     */
    public function cookieNotSupported() {
        echo 'Cookie not supported';
        return;
    }
    /**
     * 403 Forbinne area
     */
    public function forbinen() {
        echo '403 Forbinnen';
        return;
    }
}
