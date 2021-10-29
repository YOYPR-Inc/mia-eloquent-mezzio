<?php namespace Mia\Database\Where;

use \Illuminate\Database\Capsule\Manager as DB;
use \Illuminate\Database\Eloquent\Model;

/**
 * Description of Configure
 *
 * @author matiascamiletti
 */
abstract class AbstractWhere 
{
    const TYPE_LIKES = 'likes';
    const TYPE_DATE = 'date';
    const TYPE_WEEK = 'week';
    const TYPE_MONTH = 'month';
    const TYPE_YEAR = 'year';
    const TYPE_BETWEEN = 'between';
    const TYPE_RAW = 'raw';
    const TYPE_NEXT_EVENT = 'next-event';
    const TYPE_PASS_EVENT = 'pass-event';
    const TYPE_EQUAL = 'equal';
    /**
     * Type of where
     *
     * @var string
     */
    protected $type = '';
    /**
     * Key
     *
     * @var array
     */
    protected $key = '';
    /**
     * Value
     *
     * @var mixed
     */
    protected $value = '';

    /**
     * Undocumented function
     *
     * @param Model $query
     * @return void
     */
    abstract public function run($query);
    /**
     * Clean key
     *
     * @param string $key
     * @return string
     */
    public function cleanKey($key)
    {
        return str_replace([' ', ';'], '', $key);
    }
    /**
     * Verify if key is same
     *
     * @param string $key
     * @return boolean
     */
    public function isSameKey($key)
    {
        if($this->key == $key){
            return true;
        }

        return false;
    }
    /**
     * Return type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}