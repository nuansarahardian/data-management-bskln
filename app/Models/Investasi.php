<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    use HasFactory;

    protected $table = 'tbinvestmentmsib'; // Nama tabel di database

    protected $primaryKey = 'ID'; // Primary key

    public $incrementing = true; // Primary key auto increment

    protected $keyType = 'int'; // Tipe primary key

    public $timestamps = false; // Tidak menggunakan timestamps

    protected $fillable = [
        'Kode_Alpha3_Asal',
        'Provinsi_Asal',
        'Kota_Asal',
        'Kode_Alpha3_Tujuan',
        'Nama_Perusahaan',
        'Tipe_Investasi',
        'Bulan',
        'Tahun',
        'ID_Sektor',
        'Nilai_Investasi',
        'Nilai_Projek',
        'KodeSumber',
        'Status',
    ];
}
