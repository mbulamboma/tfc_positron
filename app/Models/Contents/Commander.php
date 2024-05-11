<?php
 
namespace App\Models\Contents;

use Framework\Database\Builder\QueryBuilder;
use Framework\Database\PDOFactory;
 
/**
 * Description of Commander
 *
 * @author mbula
 */
class Commander {
    
    
    /**
     * Loads main categories
     * @return type
     */
    public static function Countries() { 
        return static::getQuery()
                        ->from("provinces")
                        ->select(['id', 'province'])  
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
