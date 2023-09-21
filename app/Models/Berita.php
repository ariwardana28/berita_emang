<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Berita
 * @package App\Models
 * @version September 4, 2023, 8:18 am UTC
 *
 * @property number $kategori_id
 * @property string $judul
 * @property string $berita
 * @property string $foto
 */
class Berita extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'berita';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kategori_id',
        'judul',
        'berita',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kategori_id' => 'double',
        'judul' => 'string',
        'berita' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
