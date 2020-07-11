<?php

namespace App\Repositories;

use App\Models\YangilikOptions;
use App\Repositories\BaseRepository;

/**
 * Class YangilikOptionsRepository
 * @package App\Repositories
 * @version June 24, 2020, 6:38 am UTC
*/

class YangilikOptionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'small_title',
        'small_desc'
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
        return YangilikOptions::class;
    }
}
