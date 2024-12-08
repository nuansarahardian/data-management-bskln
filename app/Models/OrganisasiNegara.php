<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisasiNegara extends Model
{
    use HasFactory;

    protected $table = 'tborgnegara'; // Nama tabel di database

    protected $primaryKey = 'ID'; // Primary key

    public $incrementing = true; // Primary key bertipe integer dan auto increment

    protected $keyType = 'int'; // Tipe data primary key

    public $timestamps = false; // Tidak menggunakan kolom timestamps (created_at dan updated_at)

    protected $fillable = [
        'Kode_Alpha3',
        'ID_Org',
        'KodePmk',
        'Created',
    ];
    public function organisasiJenis()
{
    return $this->belongsTo(OrganisasiJenis::class, 'ID_Org', 'ID_Org');
}

}
