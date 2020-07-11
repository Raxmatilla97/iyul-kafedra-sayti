<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Users
 * @package App\Models
 * @version June 21, 2020, 7:42 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $elonlars
 * @property \Illuminate\Database\Eloquent\Collection $fanlars
 * @property \Illuminate\Database\Eloquent\Collection $gallereyas
 * @property \Illuminate\Database\Eloquent\Collection $ilmiyIshlars
 * @property \Illuminate\Database\Eloquent\Collection $ilmiyMaqolalars
 * @property \Illuminate\Database\Eloquent\Collection $okuvAdabiyotlars
 * @property \Illuminate\Database\Eloquent\Collection $students
 * @property \Illuminate\Database\Eloquent\Collection $talabaGuruhlaris
 * @property \Illuminate\Database\Eloquent\Collection $teachers
 * @property \Illuminate\Database\Eloquent\Collection $xamkorlars
 * @property \Illuminate\Database\Eloquent\Collection $yangiliklars
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class Users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function elonlars()
    {
        return $this->hasMany(\App\Models\Elonlar::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function fanlars()
    {
        return $this->hasMany(\App\Models\Fanlar::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function gallereyas()
    {
        return $this->hasMany(\App\Models\Gallereya::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ilmiyIshlars()
    {
        return $this->hasMany(\App\Models\IlmiyIshlar::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ilmiyMaqolalars()
    {
        return $this->hasMany(\App\Models\IlmiyMaqolalar::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function okuvAdabiyotlars()
    {
        return $this->hasMany(\App\Models\OkuvAdabiyotlar::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function students()
    {
        return $this->hasMany(\App\Models\Student::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function talabaGuruhlaris()
    {
        return $this->hasMany(\App\Models\TalabaGuruhlari::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function teachers()
    {
        return $this->hasMany(\App\Models\Teacher::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function xamkorlars()
    {
        return $this->hasMany(\App\Models\Xamkorlar::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function yangiliklars()
    {
        return $this->hasMany(\App\Models\Yangiliklar::class, 'user_id');
    }
}
