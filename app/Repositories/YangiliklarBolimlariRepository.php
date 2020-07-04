<?php

namespace App\Repositories;

use App\Models\YangiliklarBolimlari;
use App\Repositories\BaseRepository;

/**
 * Class YangiliklarBolimlariRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:35 am UTC
*/

class YangiliklarBolimlariRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'img'
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
        return YangiliklarBolimlari::class;
    }
}
