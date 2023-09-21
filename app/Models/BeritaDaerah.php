<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BeritaDaerah
 * @package App\Models
 * @version September 15, 2023, 4:16 pm UTC
 *
 * @property number $daerah_id
 * @property string $judul
 * @property string $foto
 * @property string $berita
 */
class BeritaDaerah extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'berita_daerah';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'daerah_id',
        'judul',
        'foto',
        'berita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'daerah_id' => 'double',
        'judul' => 'string',
        'foto' => 'string',
        'berita' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function Daerah()
    {
        return $this->belongsTo(Daerah::class, 'daerah_id');
    }
}
