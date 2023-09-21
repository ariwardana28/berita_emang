<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Iklan
 * @package App\Models
 * @version September 17, 2023, 5:39 pm UTC
 *
 * @property string $foto
 */
class Iklan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'iklan';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
