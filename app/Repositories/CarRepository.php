<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\BaseRepository;

/**
 * Class CarRepository
 * @package App\Repositories
 * @version September 24, 2020, 1:57 pm GMT
*/

class CarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'photo',
        'ci',
        'owner_id',
        'description',
        'volume',
        'disponibilite'
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
        return Car::class;
    }
}
