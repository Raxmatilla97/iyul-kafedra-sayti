<?php

namespace App\Repositories;

use App\Models\OquvAdabiyotlar;
use App\Repositories\BaseRepository;

/**
 * Class OquvAdabiyotlarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:37 am UTC
*/

class OquvAdabiyotlarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'image',
        'content',
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
        return OquvAdabiyotlar::class;
    }
}
