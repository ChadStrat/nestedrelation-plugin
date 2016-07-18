<?php namespace Radiantweb\NestedRelation\Models;

use Model;

/**
 * MoreStuff Model
 */
class MoreStuff extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'radiantweb_nestedrelation_more_stuffs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'stuff' => ['Radiantweb\NestedRelation\Models\Stuff']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}