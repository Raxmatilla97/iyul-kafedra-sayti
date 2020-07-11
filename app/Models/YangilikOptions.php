<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class YangilikOptions
 * @package App\Models
 * @version June 24, 2020, 6:38 am UTC
 *
 * @property string $title
 * @property string $small_title
 * @property string $small_desc
 */
class YangilikOptions extends Model
{
    use SoftDeletes;

    public $table = 'yangilik_options';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'small_title',
        'elon_desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'small_title' => 'string',
        'elon_desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'small_title' => 'required',
        'elon_desc' => 'required'
    ];

    
}
