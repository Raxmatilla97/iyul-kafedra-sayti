<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TalabalarGuruhlari
 * @package App\Models
 * @version June 21, 2020, 7:38 am UTC
 *
 * @property \App\Models\Teacher $teacher
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $students
 * @property string $name
 * @property string $year
 * @property boolean $arxive
 * @property integer $user_id
 * @property integer $teacher_id
 */
class TalabalarGuruhlari extends Model
{
    use SoftDeletes;

    public $table = 'talaba_guruhlari';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'year',
        'arxive',
        'user_id',
        'teacher_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'year' => 'string',
        'arxive' => 'boolean',
        'user_id' => 'integer',
        'teacher_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'year' => 'required',
        'arxive' => 'required',
        'teacher_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function teacher()
    {
        return $this->belongsTo(\App\Models\Teacher::class, 'teacher_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function students()
    {
        return $this->hasMany(\App\Models\Student::class, 'guruh_id');
    }
}
