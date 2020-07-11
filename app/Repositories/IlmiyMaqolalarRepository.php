<?php

namespace App\Repositories;

use App\Models\IlmiyMaqolalar;
use App\Repositories\BaseRepository;

/**
 * Class IlmiyMaqolalarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:36 am UTC
*/

class IlmiyMaqolalarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'image',
        'content',
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
        return IlmiyMaqolalar::class;
    }
}
