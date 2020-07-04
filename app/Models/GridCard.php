<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GridCard
 * @package App\Models
 * @version June 23, 2020, 9:43 am UTC
 *
 * @property string $title
 * @property string $small_desc
 * @property string $image
 * @property string $slug
 */
class GridCard extends Model
{
    use SoftDeletes;

    public $table = 'grid_card';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'small_desc',
        'image',
        'slug'
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
        'image' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'small_desc' => 'required',
        'image' => 'required',
        'slug' => 'required'
    ];

    
}
