<?php namespace Radiantweb\NestedRelation\Models;

use Model;

/**
 * Stuff Model
 */
class Stuff extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'radiantweb_nestedrelation_stuffs';

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
        'morestuff' => ['Radiantweb\NestedRelation\Models\MoreStuff']
    ];
    public $belongsTo = [
        'thing' => ['Radiantweb\NestedRelation\Models\Thing']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}