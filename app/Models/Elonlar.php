<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Elonlar
 * @package App\Models
 * @version June 21, 2020, 7:35 am UTC
 *
 * @property \App\Models\User $user
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $content
 * @property string $smal-content
 * @property integer $user_id
 */
class Elonlar extends Model
{
    use SoftDeletes;

    public $table = 'elonlar';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'image',
        'desc',
        'smal_desc',
        'user_id'
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
        'image' => 'string',
        'desc' => 'string',
        'smal_desc' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'desc' => 'required',
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
