<?php
 

namespace App\Models\Contents;
use Framework\Database\Builder\QueryBuilder;
use Framework\Database\PDOFactory;
 
class Categories{
    
    /**
     * Loads App Main Menu
     * @return type
     */
    public static function mainMenu() { 
        return static::getQuery()
                        ->from("app_main_menu")
                        ->select(['title', 'link']) 
                        ->where("visible = TRUE") 
                        ->execute();
    }
    /**
     * Loads main categories
     * @return type
     */
    public static function mainCategories() { 
        return static::getQuery()
                        ->from("shop_main_categories")
                        ->select(['id', 'title']) 
                        ->where("visible = TRUE") 
                        ->execute();
    }
    /**
     * Connctes to Database
     * @return QueryBuilder
     */
    private static function getQuery(){
        return new QueryBuilder(new PDOFactory());
    }
}
