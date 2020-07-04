<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class QabulYili
 * @package App\Models
 * @version June 21, 2020, 7:38 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $students
 * @property string $year
 */
class QabulYili extends Model
{
    use SoftDeletes;

    public $table = 'qabul_yili';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'year' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'year' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function students()
    {
        return $this->hasMany(\App\Models\Student::class, 'qabul_yili_id');
    }
}
