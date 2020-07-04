<?php

namespace App\Repositories;

use App\Models\Talabalar;
use App\Repositories\BaseRepository;

/**
 * Class TalabalarRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:38 am UTC
*/

class TalabalarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ism',
        'familya',
        'ota_ism',
        'tugulgan_yil',
        'tugulgan_joy',
        'yashash_manzil',
        'pass_ser',
        'pass_nom',
        'jinsi',
        'tell',
        'uy_teli',
        'oquv_turi_id',
        'user_id',
        'qabul_yili_id',
        'guruh_id',
        'yon_kod_id'
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
        return Talabalar::class;
    }
}
