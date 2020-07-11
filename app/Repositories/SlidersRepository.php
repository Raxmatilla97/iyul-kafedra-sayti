<?php

namespace App\Repositories;

use App\Models\Sliders;
use App\Repositories\BaseRepository;

/**
 * Class SlidersRepository
 * @package App\Repositories
 * @version June 23, 2020, 9:18 am UTC
*/

class SlidersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sarlavha',
        'kichik_sarlavha',
        'gap',
        'button_1',
        'button_2',
        'image'
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
        return Sliders::class;
    }
}
