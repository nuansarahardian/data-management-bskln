<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisasiJenis extends Model
{
    use HasFactory;

    protected $table = 'tborgjenis'; // Nama tabel di database

    protected $primaryKey = 'ID_Org'; // Primary key

    public $incrementing = false; // Karena ID_Org tidak auto increment

    protected $keyType = 'string'; // Primary key berupa string

    public $timestamps = false; // Tidak menggunakan timestamps

    protected $fillable = [
        'ID_Org',
        'Abbreviation',
        'Organization',
        'Category',
    ];

    // Relasi ke model OrganisasiNegara
    public function negara()
    {
        return $this->hasMany(OrganisasiNegara::class, 'ID_Org', 'ID_Org');
    }
}
