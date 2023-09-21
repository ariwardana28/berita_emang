<?php

namespace App\Repositories;

use App\Models\Daerah;
use App\Repositories\BaseRepository;

/**
 * Class DaerahRepository
 * @package App\Repositories
 * @version September 15, 2023, 4:08 pm UTC
*/

class DaerahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
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
        return Daerah::class;
    }
}
