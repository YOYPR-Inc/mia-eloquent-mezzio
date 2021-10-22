<?php namespace Mia\Database\Where;

use \Illuminate\Database\Capsule\Manager as DB;
use \Illuminate\Database\Eloquent\Model;

/**
 * Description of Configure
 *
 * @author matiascamiletti
 */
class NextEventWhere extends AbstractWhere 
{
    protected $type = AbstractWhere::TYPE_NEXT_EVENT;
    /**
     * List of keys
     *
     * @var array
     */
    protected $key = '';
    /**
     *
     * @var boolean
     */
    protected $withTime = false;

    public function __construct($data)
    {
        $this->key = $data['key'];
        $this->withTime = $data['with_time'];
    }
    /**
     * 
     *
     * @param Model $query
     * @return void
     */
    public function run($query)
    {
        if($this->withTime){
            $query->whereRaw('DATETIME('.$this->cleanKey($this->key).') >= DATETIME(NOW())');
        } else {
            $query->whereRaw('DATE('.$this->cleanKey($this->key).') >= DATE(NOW())');
        }
    }
}