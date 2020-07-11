<?php

namespace App\Repositories;

use App\Models\Xamkorlar;
use App\Repositories\BaseRepository;

/**
 * Class XamkorlarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:39 am UTC
*/

class XamkorlarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'image',
        'active',
        'text',
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
        return Xamkorlar::class;
    }
}
