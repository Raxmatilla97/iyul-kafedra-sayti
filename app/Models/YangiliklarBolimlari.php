<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class YangiliklarBolimlari
 * @package App\Models
 * @version June 21, 2020, 7:35 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $yangiliklars
 * @property string $title
 * @property string $slug
 * @property string $img
 */
class YangiliklarBolimlari extends Model
{
    use SoftDeletes;

    public $table = 'article_category';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'img'
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
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function yangiliklars()
    {
        return $this->hasMany(\App\Models\Yangiliklar::class, 'cate_id');
    }
}
