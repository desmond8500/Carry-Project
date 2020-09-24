<?php

namespace App\Repositories;

use App\Models\Lieu;
use App\Repositories\BaseRepository;

/**
 * Class LieuRepository
 * @package App\Repositories
 * @version September 24, 2020, 10:02 pm GMT
*/

class LieuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'description',
        'pays'
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
        return Lieu::class;
    }
}
