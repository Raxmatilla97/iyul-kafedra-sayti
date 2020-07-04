<?php

namespace App\Repositories;

use App\Models\IlmiyIshlar;
use App\Repositories\BaseRepository;

/**
 * Class IlmiyIshlarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:36 am UTC
*/

class IlmiyIshlarRepository extends BaseRepository
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
        return IlmiyIshlar::class;
    }
}
