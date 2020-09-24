<?php

namespace App\Repositories;

use App\Models\Trajet;
use App\Repositories\BaseRepository;

/**
 * Class TrajetRepository
 * @package App\Repositories
 * @version September 24, 2020, 8:50 pm GMT
*/

class TrajetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'car_id',
        'debut',
        'fin',
        'prix',
        'description'
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
        return Trajet::class;
    }
}
