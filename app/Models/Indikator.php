<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;

    protected $table = 'tbindikator_kinek'; // Nama tabel di database

    protected $primaryKey = 'ID_Indikator'; // Primary key

    public $incrementing = true; // Primary key auto increment

    protected $keyType = 'int'; // Tipe primary key

    public $timestamps = false; // Tidak menggunakan timestamps

    protected $fillable = [
        'Indikator', // Kolom yang dapat diisi
    ];
}
