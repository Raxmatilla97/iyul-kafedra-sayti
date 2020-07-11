<?php

namespace App\Repositories;

use App\Models\Roles;
use App\Repositories\BaseRepository;

/**
 * Class RolesRepository
 * @package App\Repositories
 * @version June 29, 2020, 7:15 am UTC
*/

class RolesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'description',
        'level'
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
        return Roles::class;
    }
}
