<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IlmiyMaqolalar
 * @package App\Models
 * @version June 21, 2020, 7:36 am UTC
 *
 * @property \App\Models\User $user
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $content
 * @property integer $user_id
 */
class IlmiyMaqolalar extends Model
{
    use SoftDeletes;

    public $table = 'ilmiy_maqolalar';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'image',
        'content',
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
        'content' => 'string',
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
        'content' => 'required',
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
