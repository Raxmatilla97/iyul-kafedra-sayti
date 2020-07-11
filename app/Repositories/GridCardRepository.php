<?php

namespace App\Repositories;

use App\Models\GridCard;
use App\Repositories\BaseRepository;

/**
 * Class GridCardRepository
 * @package App\Repositories
 * @version June 23, 2020, 9:43 am UTC
*/

class GridCardRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'small_desc',
        'image',
        'slug'
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
        return GridCard::class;
    }
}
