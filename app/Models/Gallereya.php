<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gallereya
 * @package App\Models
 * @version June 21, 2020, 7:36 am UTC
 *
 * @property \App\Models\Student $talaba
 * @property \App\Models\User $user
 * @property string $title
 * @property string $slug
 * @property string $narx
 * @property string $chizilgan_yil
 * @property string $image
 * @property string $content
 * @property string $addres
 * @property string $tell
 * @property integer $user_id
 * @property integer $talaba_id
 */
class Gallereya extends Model
{
    use SoftDeletes;

    public $table = 'gallereya';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'narx',
        'chizilgan_yil',
        'image',
        'desc',
        'addres',
        'tell',
        'user_id',
        'category_id',
        'familya_ism',
        'count',



    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'narx' => 'string',
        'chizilgan_yil' => 'string',
        'image' => 'string',
        'desc' => 'string',
        'addres' => 'string',
        'tell' => 'string',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'familya_ism' => 'string',
        'count' => 'integer',



    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'chizilgan_yil' => 'required',
        'image' => 'required',
        'desc' => 'required',
        'addres' => 'required',
        'tell' => 'required',
        'user_id' => 'required',
        'category_id' => 'required',
        'familya_ism' => 'required',



    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
   /*  public function talaba()
    {
        return $this->belongsTo(\App\Models\Student::class, 'talaba_id');
    } */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function cate(){
        return $this->belongsTo(\App\Models\GallereyaCategory::class, 'category_id');
    }
}
