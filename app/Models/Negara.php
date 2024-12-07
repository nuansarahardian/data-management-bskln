<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;

    protected $table = 'tbnegara'; // Nama tabel di database
    protected $primaryKey = 'No';

    public $timestamps = false; // Jika tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'No',
        'Kode_Angka',
        'Kode_Alpha3',
        'Kode_Alpha2',
        'Negara_IDN',
        'Negara_ENG',
        'ID_Wil',
        'ID_Wil_Kemlu',
    ];
}
