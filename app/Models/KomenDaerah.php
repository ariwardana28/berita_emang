<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class KomenDaerah
 * @package App\Models
 * @version September 18, 2023, 4:59 pm UTC
 *
 * @property number $berita_daerah_id
 * @property string $nama
 * @property string $email
 * @property string $komen
 */
class KomenDaerah extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'komen_daerah';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'berita_daerah_id',
        'nama',
        'email',
        'komen'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'berita_daerah_id' => 'double',
        'nama' => 'string',
        'email' => 'string',
        'komen' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
