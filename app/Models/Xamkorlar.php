<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Xamkorlar
 * @package App\Models
 * @version June 21, 2020, 7:39 am UTC
 *
 * @property \App\Models\User $user
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property boolean $active
 * @property string $text
 * @property integer $user_id
 */
class Xamkorlar extends Model
{
    use SoftDeletes;

    public $table = 'xamkorlar';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'image',
        'active',
        'text',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'image' => 'string',
        'active' => 'boolean',
        'text' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'slug' => 'required',
        'active' => 'required',
        'text' => 'required',
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
