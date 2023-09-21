<?php

namespace App\Repositories;

use App\Models\Iklan;
use App\Repositories\BaseRepository;

/**
 * Class IklanRepository
 * @package App\Repositories
 * @version September 17, 2023, 5:39 pm UTC
*/

class IklanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'foto'
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
        return Iklan::class;
    }
}
