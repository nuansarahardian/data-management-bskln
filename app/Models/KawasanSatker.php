<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KawasanSatker extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model
    protected $table = 'tbkawasan_satker';

    // Primary key dari tabel
    protected $primaryKey = 'ID_Wil_Kemlu';

    // Jika primary key bukan auto-increment
    public $incrementing = false;

    // Tipe primary key
    protected $keyType = 'string';

    // Jika tabel tidak menggunakan timestamps
    public $timestamps = false;

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'ID_Wil_Kemlu',
        'Nama_Wil_Kemlu',
        'ID_Dirjen',
    ];


    public function dirjen()
    {
        return $this->belongsTo(Dirjen::class, 'ID_Dirjen', 'ID_Dirjen');
    }
}
