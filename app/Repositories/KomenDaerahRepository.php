<?php

namespace App\Repositories;

use App\Models\KomenDaerah;
use App\Repositories\BaseRepository;

/**
 * Class KomenDaerahRepository
 * @package App\Repositories
 * @version September 18, 2023, 4:59 pm UTC
*/

class KomenDaerahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'berita_daerah_id',
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
        return KomenDaerah::class;
    }
}
