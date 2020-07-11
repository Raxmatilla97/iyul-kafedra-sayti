<?php

namespace App\Repositories;

use App\Models\Firstbanner;
use App\Repositories\BaseRepository;

/**
 * Class FirstbannerRepository
 * @package App\Repositories
 * @version June 23, 2020, 12:10 pm UTC
*/

class FirstbannerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'small_desc',
        'desc',
        'slug',
        'image',
        'buttonname'
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
        return Firstbanner::class;
    }
}
