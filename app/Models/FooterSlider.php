<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FooterSlider
 * @package App\Models
 * @version July 6, 2020, 3:28 am UTC
 *
 * @property string $title
 * @property string $image
 */
class FooterSlider extends Model
{
    use SoftDeletes;

    public $table = 'footer_slider';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'image',
        'slug',

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
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
        'image' => 'required',
        'slug' => 'required'
    ];

    
}
