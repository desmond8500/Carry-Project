<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lieu
 * @package App\Models
 * @version September 24, 2020, 10:02 pm GMT
 *
 * @property string $nom
 * @property string $description
 * @property string $pays
 */
class Lieu extends Model
{
    use SoftDeletes;

    public $table = 'lieus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'description',
        'pays'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'description' => 'string',
        'pays' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
