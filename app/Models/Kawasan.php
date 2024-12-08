<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kawasan extends Model
{
    use HasFactory;

    protected $table = 'tbkawasan';
    protected $primaryKey = 'ID_Wil';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['ID_Wil', 'Nama_Wil', 'ID_Benua'];

    // Relasi ke model Benua
    public function benua()
    {
        return $this->belongsTo(Benua::class, 'ID_Benua', 'ID_Benua');
    }
}
