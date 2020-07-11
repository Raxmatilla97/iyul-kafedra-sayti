<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class YonalishKodlari
 * @package App\Models
 * @version June 21, 2020, 7:39 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $students
 * @property string $name
 */
class YonalishKodlari extends Model
{
    use SoftDeletes;

    public $table = 'yonalish_kodlari';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
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
        return $this->hasMany(\App\Models\Student::class, 'yon_kod_id');
    }
}
