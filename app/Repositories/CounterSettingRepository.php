<?php

namespace App\Repositories;

use App\Models\CounterSetting;
use App\Repositories\BaseRepository;

/**
 * Class CounterSettingRepository
 * @package App\Repositories
 * @version July 6, 2020, 3:25 am UTC
*/

class CounterSettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'small_desc',
        'icon'
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
        return CounterSetting::class;
    }
}
