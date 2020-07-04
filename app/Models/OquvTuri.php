<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OquvTuri
 * @package App\Models
 * @version June 21, 2020, 7:37 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $students
 * @property string $name
 * @property string $slug
 * @property string $desc
 * @property string $img
 */
class OquvTuri extends Model
{
    use SoftDeletes;

    public $table = 'oquv_turi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'desc',
        'img'
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
        'desc' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function students()
    {
        return $this->hasMany(\App\Models\Student::class, 'oquv_turi_id');
    }
}
