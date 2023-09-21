<?php

namespace App\Repositories;

use App\Models\Komen;
use App\Repositories\BaseRepository;

/**
 * Class KomenRepository
 * @package App\Repositories
 * @version September 18, 2023, 4:52 pm UTC
*/

class KomenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'berita_id',
        'nama',
        'email',
        'komen'
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
        return Komen::class;
    }
}
