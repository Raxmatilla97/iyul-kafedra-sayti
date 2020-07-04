<?php

namespace App\Repositories;

use App\Models\OquvTuri;
use App\Repositories\BaseRepository;

/**
 * Class OquvTuriRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:37 am UTC
*/

class OquvTuriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'desc',
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
        return OquvTuri::class;
    }
}
