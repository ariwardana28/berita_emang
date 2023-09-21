<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class About
 * @package App\Models
 * @version September 4, 2023, 2:28 pm UTC
 *
 * @property string $judul
 * @property textarea $text
 */
class About extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'about';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'judul',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'judul' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
