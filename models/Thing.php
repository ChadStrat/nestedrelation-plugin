<?php namespace Radiantweb\NestedRelation\Models;

use Model;

/**
 * Thing Model
 */
class Thing extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'radiantweb_nestedrelation_things';

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
    public $hasMany = [
        'stuff' => ['Radiantweb\NestedRelation\Models\Stuff']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}