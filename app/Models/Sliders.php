<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sliders
 * @package App\Models
 * @version June 23, 2020, 9:18 am UTC
 *
 * @property string $sarlavha
 * @property string $kichik_sarlavha
 * @property string $gap
 * @property string $button_1
 * @property string $button_2
 * @property string $image
 */
class Sliders extends Model
{
    use SoftDeletes;

    public $table = 'sliders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sarlavha',
        'kichik_sarlavha',
        'gap',
        'button_1',
        'button_2',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sarlavha' => 'string',
        'kichik_sarlavha' => 'string',
        'gap' => 'string',
        'button_1' => 'string',
        'button_2' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sarlavha' => 'required',
        'kichik_sarlavha' => 'required',
        'gap' => 'required',
        'image' => 'required'
    ];

    
}
