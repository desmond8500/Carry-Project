<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Car
 * @package App\Models
 * @version September 24, 2020, 1:57 pm GMT
 *
 * @property string $name
 * @property string $photo
 * @property string $ci
 * @property string $owner_id
 * @property string $description
 * @property string $volume
 * @property string $disponibilite
 */
class Car extends Model
{
    use SoftDeletes;

    public $table = 'cars';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'photo',
        'ci',
        'owner_id',
        'description',
        'volume',
        'disponibilite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'photo' => 'string',
        'ci' => 'string',
        'owner_id' => 'string',
        'description' => 'string',
        'volume' => 'string',
        'disponibilite' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
