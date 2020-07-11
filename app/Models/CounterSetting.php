<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CounterSetting
 * @package App\Models
 * @version July 6, 2020, 3:25 am UTC
 *
 * @property string $number
 * @property string $small_desc
 * @property string $icon
 */
class CounterSetting extends Model
{
    use SoftDeletes;

    public $table = 'counter_setting';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'number',
        'small_desc',
        'icon'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'string',
        'small_desc' => 'string',
        'icon' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number' => 'required',
        'small_desc' => 'required',
        'icon' => 'required'
    ];

    
}
