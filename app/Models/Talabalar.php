<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Talabalar
 * @package App\Models
 * @version June 21, 2020, 7:38 am UTC
 *
 * @property \App\Models\TalabaGuruhlari $guruh
 * @property \App\Models\OquvTuri $oquvTuri
 * @property \App\Models\QabulYili $qabulYili
 * @property \App\Models\User $user
 * @property \App\Models\YonalishKodlari $yonKod
 * @property \Illuminate\Database\Eloquent\Collection $gallereyas
 * @property string $ism
 * @property string $familya
 * @property string $ota_ism
 * @property string $tugulgan_yil
 * @property string $tugulgan_joy
 * @property string $yashash_manzil
 * @property string $pass_ser
 * @property string $pass_nom
 * @property string $jinsi
 * @property string $tell
 * @property string $uy_teli
 * @property integer $oquv_turi_id
 * @property integer $user_id
 * @property integer $qabul_yili_id
 * @property integer $guruh_id
 * @property integer $yon_kod_id
 */
class Talabalar extends Model
{
    use SoftDeletes;

    public $table = 'students';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ism',
        'familya',
        'ota_ism',
        'tugulgan_yil',
        'tugulgan_joy',
        'yashash_manzil',
        'pass_ser',
        'pass_nom',
        'jinsi',
        'tell',
        'uy_teli',
        'oquv_turi_id',
        'user_id',
        'qabul_yili_id',
        'guruh_id',
        'yon_kod_id'
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
        'ota_ism' => 'string',
        'tugulgan_yil' => 'string',
        'tugulgan_joy' => 'string',
        'yashash_manzil' => 'string',
        'pass_ser' => 'string',
        'pass_nom' => 'string',
        'jinsi' => 'string',
        'tell' => 'string',
        'uy_teli' => 'string',
        'oquv_turi_id' => 'integer',
        'user_id' => 'integer',
        'qabul_yili_id' => 'integer',
        'guruh_id' => 'integer',
        'yon_kod_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ism' => 'required',
        'familya' => 'required',
        'ota_ism' => 'required',
        'tugulgan_yil' => 'required',
        'tugulgan_joy' => 'required',
        'yashash_manzil' => 'required',
        'pass_ser' => 'required',
        'pass_nom' => 'required',
        'jinsi' => 'required',
        'oquv_turi_id' => 'required',
        'user_id' => 'required',
        'qabul_yili_id' => 'required',
        'guruh_id' => 'required',
        'yon_kod_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function guruh()
    {
        return $this->belongsTo(\App\Models\TalabaGuruhlari::class, 'guruh_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function oquvTuri()
    {
        return $this->belongsTo(\App\Models\OquvTuri::class, 'oquv_turi_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function qabulYili()
    {
        return $this->belongsTo(\App\Models\QabulYili::class, 'qabul_yili_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function yonKod()
    {
        return $this->belongsTo(\App\Models\YonalishKodlari::class, 'yon_kod_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function gallereyas()
    {
        return $this->hasMany(\App\Models\Gallereya::class, 'talaba_id');
    }
}
