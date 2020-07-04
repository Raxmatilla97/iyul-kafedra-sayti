<?php

namespace App\Repositories;

use App\Models\GallereyaCategory;
use App\Repositories\BaseRepository;

/**
 * Class GallereyaCategoryRepository
 * @package App\Repositories
 * @version June 24, 2020, 7:00 am UTC
*/

class GallereyaCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug'
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
        return GallereyaCategory::class;
    }
}
