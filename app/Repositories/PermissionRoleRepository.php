<?php

namespace App\Repositories;

use App\Models\PermissionRole;
use App\Repositories\BaseRepository;

/**
 * Class PermissionRoleRepository
 * @package App\Repositories
 * @version June 29, 2020, 7:17 am UTC
*/

class PermissionRoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'permission_id',
        'role_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PermissionRole::class;
    }
}
