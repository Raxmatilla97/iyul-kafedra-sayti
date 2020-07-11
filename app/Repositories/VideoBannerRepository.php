<?php

namespace App\Repositories;

use App\Models\VideoBanner;
use App\Repositories\BaseRepository;

/**
 * Class VideoBannerRepository
 * @package App\Repositories
 * @version July 4, 2020, 1:57 pm UTC
*/

class VideoBannerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'small_desc',
        'image',
        'video'
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
        return VideoBanner::class;
    }
}
