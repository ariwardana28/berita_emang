<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Slide
 * @package App\Models
 * @version September 4, 2023, 2:08 pm UTC
 *
 * @property string $foto
 * @property number $status
 */
class Slide extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'slide';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
