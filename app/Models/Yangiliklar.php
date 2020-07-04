<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Yangiliklar
 * @package App\Models
 * @version June 21, 2020, 7:34 am UTC
 *
 * @property \App\Models\ArticleCategory $cate
 * @property \App\Models\User $user
 * @property string $title
 * @property string $slug
 * @property boolean $active
 * @property string $desc
 * @property string $smal_desc
 * @property string $image
 * @property integer $user_id
 * @property integer $cate_id
 */
class Yangiliklar extends Model
{
    use SoftDeletes;

    public $table = 'yangiliklar';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'active',
        'desc',
        'smal_desc',
        'image',
        'user_id',
        'cate_id'
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
        'active' => 'boolean',
        'desc' => 'string',
        'smal_desc' => 'string',
        'image' => 'string',
        'user_id' => 'integer',
        'cate_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'active' => 'required',
        'desc' => 'required',
        'image' => 'required',
        'user_id' => 'required',
        'cate_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cate()
    {
        return $this->belongsTo(\App\Models\YangiliklarBolimlari::class, 'cate_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
