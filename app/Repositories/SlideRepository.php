<?php

namespace App\Repositories;

use App\Models\Slide;
use App\Repositories\BaseRepository;

/**
 * Class SlideRepository
 * @package App\Repositories
 * @version September 4, 2023, 2:08 pm UTC
*/

class SlideRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status'
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
        return Slide::class;
    }
}
