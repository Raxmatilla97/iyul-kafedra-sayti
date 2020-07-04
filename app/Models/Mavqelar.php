<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mavqelar
 * @package App\Models
 * @version June 21, 2020, 7:37 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $teachers
 * @property string $name
 */
class Mavqelar extends Model
{
    use SoftDeletes;

    public $table = 'mavqeylar';
    
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
    public function teachers()
    {
        return $this->hasMany(\App\Models\Teacher::class, 'mavqe_id');
    }
}
