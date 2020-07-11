<?php

namespace App\Repositories;

use App\Models\RoleUser;
use App\Repositories\BaseRepository;

/**
 * Class RoleUserRepository
 * @package App\Repositories
 * @version June 29, 2020, 7:18 am UTC
*/

class RoleUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'role_id',
        'user_id'
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
        return RoleUser::class;
    }
}
