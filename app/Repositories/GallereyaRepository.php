<?php

namespace App\Repositories;

use App\Models\Gallereya;
use App\Repositories\BaseRepository;

/**
 * Class GallereyaRepository
 * @package App\Repositories
 * @version June 21, 2020, 7:36 am UTC
*/

class GallereyaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'narx',
        'chizilgan_yil',
        'image',
        'desc',
        'addres',
        'tell',
        'user_id',
       
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
        return Gallereya::class;
    }
}
