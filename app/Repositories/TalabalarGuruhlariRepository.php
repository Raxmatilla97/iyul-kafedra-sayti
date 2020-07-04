<?php

namespace App\Repositories;

use App\Models\TalabalarGuruhlari;
use App\Repositories\BaseRepository;

/**
 * Class TalabalarGuruhlariRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:38 am UTC
*/

class TalabalarGuruhlariRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'year',
        'arxive',
        'user_id',
        'teacher_id'
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
        return TalabalarGuruhlari::class;
    }
}
