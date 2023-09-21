<?php

namespace App\Repositories;

use App\Models\Media;
use App\Repositories\BaseRepository;

/**
 * Class MediaRepository
 * @package App\Repositories
 * @version September 4, 2023, 2:38 pm UTC
*/

class MediaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gambar',
        'media'
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
        return Media::class;
    }
}
