<?php namespace Mia\Database\Query;

use \Illuminate\Database\Capsule\Manager as DB;
use \Illuminate\Database\Eloquent\Model;

/**
 * Description of Configure
 *
 * @author matiascamiletti
 */
class FactoryWhere
{
    /**
     * 
     */
    static $types = [
        AbstractWhere::TYPE_LIKES => LikesWhere::class
    ];
    /**
     * Create where
     *
     * @param array $data
     * @return void
     */
    public static function create($data)
    {
        $className = self::$types[$data['type']];
        return new $className($data);
    }
    /**
     * Create all wheres
     *
     * @param array $wheres
     * @return void
     */
    public static function createAll($wheres)
    {
        $items = [];
        foreach($wheres as $where){
            $items[] = self::create($where);
        }
        return $items;
    }
}