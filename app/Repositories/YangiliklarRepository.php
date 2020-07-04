<?php

namespace App\Repositories;

use App\Models\Yangiliklar;
use App\Repositories\BaseRepository;

/**
 * Class YangiliklarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:34 am UTC
*/

class YangiliklarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'active',
        'desc',
        'smal_desc',
        'image',
        'user_id',
        'cate_id'
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
        return Yangiliklar::class;
    }
}
