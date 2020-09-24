<?php

namespace App\Repositories;

use App\Models\Commande;
use App\Repositories\BaseRepository;

/**
 * Class CommandeRepository
 * @package App\Repositories
 * @version September 24, 2020, 4:08 pm GMT
*/

class CommandeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'client_id',
        'car_id'
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
        return Commande::class;
    }
}
