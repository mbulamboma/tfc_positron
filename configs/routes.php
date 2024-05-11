<?php
/**
 * *****************************************************************************
 * *************************** ROUTES ******************************************
 * *** This file containes every routes accessible to the browser **************
 * ** Exemple: return [
 * **                  "name_of_url" => [
 * **                     "url" => "/index/:id",
 * **                     "action" => "App\Front\Main",
 * **                     "method" => "GET",
 * **                     "role" => "public"
 * **                   ],
 * **           ];
 * @decription Avoid the Use of Url separated by 
 * **          - example example.com/page-1
 * **          Better use example.com/page1
 * @todo  NEVER FORGET TO SPECIFY THE 404 NOT FOUND URL  
 * *****************************************************************************
 * *****************************************************************************
 * *****************************************************************************
 */
return [ 
    "profil" => [
        "url" => "/profil",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::profil',
        "role" => "public"
    ],
    "mode_de_payement" => [
        "url" => "/mode-de-payements",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::payer',
        "role" => "public"
    ],
    "update_profil" => [
        "url" => "/update-profil",
        "method" => "POST",
        "action" =>  'App\\Controllers\\MainController::update_profil',
        "role" => "public"
    ],
    "commander" => [
        "url" => "/check-before-command",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::check_before_cmd',
        "role" => "public"
    ],
    "ajouter_au_panier" => [
        "url" => "/panier",
        "method" => "POST",
        "action" =>  'App\\Controllers\\MainController::ajouter_au_panier',
        "role" => "public"
    ],
    "sign_up_news_letter" => [
        "url" => "/newsletter",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::sign_up_news_letter',
        "role" => "public"
    ],
    "verify_link" => [
        "url" => "/verify_link/:link",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::verify_link',
        "role" => "public"
    ],
    "verify_first" => [
        "url" => "/verify_first",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::verify_first',
        "role" => "public"
    ],
    "politique" => [
        "url" => "/politique",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::policy',
        "role" => "public"
    ], 
    "suivre" => [
        "url" => "/suivre",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::suivre',
        "role" => "public"
    ], 
    "contact" => [
        "url" => "/contact",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::contact',
        "role" => "public"
    ], 
    "panier" => [
        "url" => "/panier",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::panier',
        "role" => "public"
    ], 
    "all" => [
        "url" => "/filter",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::filter',
        "role" => "public"
    ], 
    "voir" => [
        "url" => "/voir/:id",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::voirArticle',
        "role" => "public"
    ], 
    "main" => [
        "url" => "/",
        "method" => "GET",
        "action" =>  'App\\Controllers\\MainController::index',
        "role" => "public"
    ], 
    "login-auth" => [
        "url" => "/login",
        "method" => "POST",
        "action" =>  'App\\Controllers\\AuthController::serverLogin',
        "role" => "public"
    ], 
    "facebook-auth" => [
        "url" => "/facebook/:url",
        "method" => "GET",
        "action" =>  'App\\Controllers\\AuthController::facebook_callback',
        "role" => "public"
    ], 
    "verify" => [
        "url" => "/verify",
        "method" => "GET",
        "action" =>  'App\\Controllers\\AuthController::verify',
        "role" => "loggedIn"
    ], 
    "verify" => [
        "url" => "/verify/:token",
        "method" => "GET",
        "action" =>  'App\\Controllers\\AuthController::verify',
        "role" => "loggedIn"
    ], 
    "register-page" => [
        "url" => "/register/:token",
        "method" => "POST",
        "action" =>  'App\\Controllers\\AuthController::sign_up',
        "role" => "public"
    ],
    "deconnexion" => [
        "url" => "/deconnect",
        "method" => "GET",
        "action" =>  'App\\Controllers\\AuthController::deconnect',
        "role" => "public"
    ], 
   "404" => [
        "url" => "/404",
        "method" => "GET",
        "action" => "App\\Controllers\\Errors::notFound",
        "role" => "admin"       
   ],
];

