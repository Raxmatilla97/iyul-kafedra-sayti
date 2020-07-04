<?php

namespace App\Repositories;

use App\Models\QabulYili;
use App\Repositories\BaseRepository;

/**
 * Class QabulYiliRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:38 am UTC
*/

class QabulYiliRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'year'
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
        return QabulYili::class;
    }
}
