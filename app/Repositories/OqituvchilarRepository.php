<?php

namespace App\Repositories;

use App\Models\Oqituvchilar;
use App\Repositories\BaseRepository;

/**
 * Class OqituvchilarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:39 am UTC
*/

class OqituvchilarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ism',
        'familya',
        'sharif',
        'tugulgan_yil',
        'tugulgan_joy',
        'yashash_manzil',
        'ishlamoqda',
        'fanlar_id',
        'pass_ser',
        'pass_nom',
        'jinsi',
        'tell',
        'uy_teli',
        'user_id',
        'mavqe_id'
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
        return Oqituvchilar::class;
    }
}
