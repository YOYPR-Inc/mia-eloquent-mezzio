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
    /**
     * Type of where
     *
     * @var string
     */
    protected $type = '';
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
}