<?php

namespace App\Repositories;

use App\Models\YonalishKodlari;
use App\Repositories\BaseRepository;

/**
 * Class YonalishKodlariRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:39 am UTC
*/

class YonalishKodlariRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return YonalishKodlari::class;
    }
}
