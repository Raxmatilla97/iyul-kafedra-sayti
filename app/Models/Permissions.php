<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permissions
 * @package App\Models
 * @version June 29, 2020, 7:15 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $permissionRoles
 * @property \Illuminate\Database\Eloquent\Collection $permissionUsers
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $model
 */
class Permissions extends Model
{
    use SoftDeletes;

    public $table = 'permissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'description',
        'model'
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
        'description' => 'string',
        'model' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'slug' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function permissionRoles()
    {
        return $this->hasMany(\App\Models\PermissionRole::class, 'permission_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function permissionUsers()
    {
        return $this->hasMany(\App\Models\PermissionUser::class, 'permission_id');
    }
}
