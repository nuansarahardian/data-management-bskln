<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dirjen extends Model
{
    use HasFactory;

    protected $table = 'tbdirjen'; // Nama tabel
    protected $primaryKey = 'ID_Dirjen'; // Primary key
    public $incrementing = false; // Karena ID_Dirjen adalah string
    protected $keyType = 'string'; // Tipe data primary key
    public $timestamps = false; // Tabel tidak menggunakan timestamps

    protected $fillable = [
        'ID_Dirjen',
        'Nama_Dirjen',
    ];

    // Relasi ke KawasanSatker
    public function kawasanSatker()
    {
        return $this->hasMany(KawasanSatker::class, 'ID_Dirjen', 'ID_Dirjen');
    }
}
