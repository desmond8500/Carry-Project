<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Commande
 * @package App\Models
 * @version September 24, 2020, 4:08 pm GMT
 *
 * @property string $client_id
 * @property string $car_id
 */
class Commande extends Model
{
    use SoftDeletes;

    public $table = 'commandes';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'car_id',
        'user_id',
        'statut'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'car_id' => 'string',
        'user_id' => 'string',
        'statut' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
