<?php

namespace App\Controllers;
use Framework\Templating\Controller; 
use App\Models\Contents\Categories;
use App\Models\Contents\Commander;
/**
 * Description of MainController
 *
 * @author mbula
 */
class MainController  extends Controller {
    /**
     * Initializing the controller
     */
    function __construct() {
        $this->data["shop_main_categories"] = Categories::mainCategories();
        $this->data["app_main_menu"] = Categories::mainMenu();
    }

    /**
     * Homepage
     */
    public function index() { 
        $this->data["title"] = "Positron | Meilleiur distributeur de quits electronique en Rdc"; 
        echo $this->assemble("index");
    } 
    /**
     * Mode de payements
     */
    public function payer() { 
        $this->data["title"] = "Mode de payment | Meilleiur distributeur de quits electronique en Rdc"; 
        $this->data['countries'] = Commander::Countries();
        
        echo $this->assemble("mode_de_payement");
    } 
    /**
     * Update profil before payements
     */
    public function update_profil() {  
        echo json_encode("checking");
    }
    /**
     * profil de l'utilisateur
     */
    public function profil() { 
        $this->data["title"] = "Profil du Client Positron | Meilleiur distributeur de quits electronique en Rdc"; 
        $this->data['countries'] = Commander::Countries();
        $this->data["username"] = $_SESSION['username'];
        echo $this->assemble("profil");
    }  
    /**
     * Update profil 
     */
    public function check_before_cmd() { 
        $this->data["title"] = "Verifier votre profil  Client avant de Commander | Meilleiur distributeur de quits electronique en Rdc"; 
        $this->data['countries'] = Commander::Countries();
        echo $this->assemble("check_profil_befor_cmd");
    } 
    /**
     * verify page
     */
    public function sign_up_news_letter() { 
        $this->data["title"] = "Merci d'avoir accepter nptre news letter | Veuillez patienter pendant que Positron est en train de Vérifier votre Email"; 
        $this->data["main_message"] = "Merci d'avoir voulu recevoir de nos nouvelles"; 
        $this->data["secondary_msg"] = "PosiTron vous enverra très souvent des fiches techniques et des alertes sur la baisse des prix sur vos favoris"; 
        
        echo $this->assemble("msg_page");
    } 
    /**
     * verify page
     */
    public function verify_first() { 
        $this->data["title"] = "Activation de Votre Compte | Veuillez patienter pendant que Positron est en train de Vérifier votre Email"; 
        $this->data["main_message"] = "Un Email d'activation vient d'être envoyé à votre email.";
        $this->data["secondary_msg"] = "Un lien d'activation vient d'être envoyé à votre email. Veuillez consulter votre adresse mail afin de terminer la procecuss d'inscription" ;
        
        echo $this->assemble("msg_page");
    } 
    /**
     * verify page
     */
    public function verify_link($link) { 
        $this->data["title"] = "Veuillez activer votre Compte | Un email vous a été envoyé dans votre adress email"; 
        if(true){
            $this->data["main_message"] = "Votre email a été véridié avec success";
        }else{
           $this->data["main_message"] = "Le lien que vous venez d'utilisé a été dejà expiré"; 
        }
        $this->data["secondary_msg"] = "Positron vient de valider votre adress email. Vous pouvez continuer à faire du shopping chez nous" ;
        
        echo $this->assemble("msg_page");
    } 
    /**
     * Policy page
     */
    public function policy() { 
        $this->data["title"] = "Suivre votre commande | Passer la commande et recevez votre"
                . " quits dans les 24 heures qui suivent la commande"; 
        echo $this->assemble("policy");
    } 
    /**
     * Suivre page
     */
    public function suivre() { 
        $this->data["title"] = "Suivre votre commande | Passer la commande et recevez votre"
                . " quits dans les 24 heures qui suivent la commande"; 
        echo $this->assemble("suivre");
    } 
    /**
     * Contact page
     */
    public function contact() { 
        $this->data["title"] = "Contacter l'equipe de Positron | Passer la commande et recevez votre"
                . " quits dans les 24 heures qui suivent la commande"; 
        echo $this->assemble("contact");
    } 
    /**
     * Filtrer page
     */
    public function filter() { 
        $this->data["title"] = "Voir Tout | Passer la commande et recevez votre"
                . " quits dans les 24 heures qui suivent la commande"; 
        echo $this->assemble("all");
    } 
    /**
     * Add to Carts page
     */
    public function ajouter_au_panier() { 
        $this->panier();
    } 
    /**
     * Cart page
     */
    public function panier() { 
        $this->data["title"] = "Panier | Passer la commande et recevez votre"
                . " quits dans les 24 heures qui suivent la commande"; 
        echo $this->assemble("panier");
    } 
    /**
     * Cart page
     */
    public function voirArticle($id) { 
        $this->data["title"] = "Titre de l'article | Passer la commande et recevez votre"
                . " quits dans les 24 heures qui suivent la commande"; 
        echo $this->assemble("voir");
    } 
}  