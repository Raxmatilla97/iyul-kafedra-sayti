<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Firstbanner
 * @package App\Models
 * @version June 23, 2020, 12:10 pm UTC
 *
 * @property string $title
 * @property string $small_desc
 * @property string $desc
 * @property string $slug
 * @property string $image
 * @property string $buttonname
 */
class Firstbanner extends Model
{
    use SoftDeletes;

    public $table = 'firstbanner';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'small_desc',
        'desc',
        'slug',
        'image',
        'buttonname'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'small_desc' => 'string',
        'desc' => 'string',
        'slug' => 'string',
        'image' => 'string',
        'buttonname' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'small_desc' => 'required',
        'desc' => 'required',
        'slug' => 'required',
        'image' => 'required',
        'buttonname' => 'required'
    ];

    
}
