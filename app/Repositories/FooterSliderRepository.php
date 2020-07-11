<?php

namespace App\Repositories;

use App\Models\FooterSlider;
use App\Repositories\BaseRepository;

/**
 * Class FooterSliderRepository
 * @package App\Repositories
 * @version July 6, 2020, 3:28 am UTC
*/

class FooterSliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
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
        return FooterSlider::class;
    }
}
