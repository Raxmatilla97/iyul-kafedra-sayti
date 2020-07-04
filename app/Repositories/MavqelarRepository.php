<?php

namespace App\Repositories;

use App\Models\Mavqelar;
use App\Repositories\BaseRepository;

/**
 * Class MavqelarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:37 am UTC
*/

class MavqelarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Mavqelar::class;
    }
}
