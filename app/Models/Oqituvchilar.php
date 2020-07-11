<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Oqituvchilar
 * @package App\Models
 * @version June 21, 2020, 7:39 am UTC
 *
 * @property \App\Models\Fanlar $fanlar
 * @property \App\Models\Mavqeylar $mavqe
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $talabaGuruhlaris
 * @property string $ism
 * @property string $familya
 * @property string $sharif
 * @property string $tugulgan_yil
 * @property string $tugulgan_joy
 * @property string $yashash_manzil
 * @property string $ishlamoqda
 * @property integer $fanlar_id
 * @property string $pass_ser
 * @property string $pass_nom
 * @property string $jinsi
 * @property string $tell
 * @property string $uy_teli
 * @property integer $user_id
 * @property integer $mavqe_id
 */
class Oqituvchilar extends Model
{
    use SoftDeletes;

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ism',
        'familya',
        'sharif',
        'tugulgan_yil',
        'tugulgan_joy',
        'yashash_manzil',
        'ishlamoqda',
        'fanlar_id',
        'pass_ser',
        'pass_nom',
        'jinsi',
        'tell',
        'uy_teli',
        'user_id',
        'mavqe_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ism' => 'string',
        'familya' => 'string',
        'sharif' => 'string',
        'tugulgan_yil' => 'string',
        'tugulgan_joy' => 'string',
        'yashash_manzil' => 'string',
        'ishlamoqda' => 'string',
        'fanlar_id' => 'integer',
        'pass_ser' => 'string',
        'pass_nom' => 'string',
        'jinsi' => 'string',
        'tell' => 'string',
        'uy_teli' => 'string',
        'user_id' => 'integer',
        'mavqe_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ism' => 'required',
        'familya' => 'required',
        'sharif' => 'required',
        'tugulgan_yil' => 'required',
        'tugulgan_joy' => 'required',
        'yashash_manzil' => 'required',
        'ishlamoqda' => 'required',
        'fanlar_id' => 'required',
        'pass_ser' => 'required',
        'pass_nom' => 'required',
        'jinsi' => 'required',
        'mavqe_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function fanlar()
    {
        return $this->belongsTo(\App\Models\Fanlar::class, 'fanlar_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function mavqe()
    {
        return $this->belongsTo(\App\Models\Mavqeylar::class, 'mavqe_id');
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
    public function talabaGuruhlaris()
    {
        return $this->hasMany(\App\Models\TalabaGuruhlari::class, 'teacher_id');
    }
}
