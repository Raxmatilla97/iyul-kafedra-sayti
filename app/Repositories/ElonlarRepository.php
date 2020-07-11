<?php

namespace App\Repositories;

use App\Models\Elonlar;
use App\Repositories\BaseRepository;

/**
 * Class ElonlarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:35 am UTC
*/

class ElonlarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'image',
        'desc',
        'smal_desc',
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
        return Elonlar::class;
    }
}
