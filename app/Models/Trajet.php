<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trajet
 * @package App\Models
 * @version September 24, 2020, 8:50 pm GMT
 *
 * @property string $car_id
 * @property string $debut
 * @property string $fin
 * @property string $prix
 * @property string $description
 */
class Trajet extends Model
{
    use SoftDeletes;

    public $table = 'trajets';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'car_id',
        'debut',
        'fin',
        'prix',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'car_id' => 'string',
        'debut' => 'string',
        'fin' => 'string',
        'prix' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
