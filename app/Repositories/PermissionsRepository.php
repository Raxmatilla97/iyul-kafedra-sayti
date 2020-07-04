<?php

namespace App\Repositories;

use App\Models\Permissions;
use App\Repositories\BaseRepository;

/**
 * Class PermissionsRepository
 * @package App\Repositories
 * @version June 29, 2020, 7:15 am UTC
*/

class PermissionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'description',
        'model'
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
        return Permissions::class;
    }
}
