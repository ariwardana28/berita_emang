<?php

namespace App\Repositories;

use App\Models\BeritaDaerah;
use App\Repositories\BaseRepository;

/**
 * Class BeritaDaerahRepository
 * @package App\Repositories
 * @version September 15, 2023, 4:16 pm UTC
*/

class BeritaDaerahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'daerah_id',
        'judul',
        'foto',
        'berita'
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
        return BeritaDaerah::class;
    }
}
