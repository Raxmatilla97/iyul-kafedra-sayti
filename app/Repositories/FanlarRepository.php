<?php

namespace App\Repositories;

use App\Models\Fanlar;
use App\Repositories\BaseRepository;

/**
 * Class FanlarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:36 am UTC
*/

class FanlarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'image',
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
        return Fanlar::class;
    }
}
