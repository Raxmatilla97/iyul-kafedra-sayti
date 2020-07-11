<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VideoBanner
 * @package App\Models
 * @version July 4, 2020, 1:57 pm UTC
 *
 * @property string $title
 * @property string $small_desc
 * @property string $image
 * @property string $video
 */
class VideoBanner extends Model
{
    use SoftDeletes;

    public $table = 'video_banner';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'small_desc',
        'image',
        'video'
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
        'video' => 'string'
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
        'video' => 'required'
    ];

    
}
