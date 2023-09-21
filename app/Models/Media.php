<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Media
 * @package App\Models
 * @version September 4, 2023, 2:38 pm UTC
 *
 * @property string $gambar
 * @property string $media
 */
class Media extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'media';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'gambar',
        'media'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'gambar' => 'string',
        'media' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
