<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benua extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model
    protected $table = 'tbbenua'; 

    // Primary key dari tabel
    protected $primaryKey = 'ID_Benua';

    // Tipe primary key jika bukan incrementing integer
    public $incrementing = false; // Karena ID_Benua menggunakan string
    protected $keyType = 'string';

    // Jika tabel tidak menggunakan timestamps
    public $timestamps = false;

    // Kolom yang bisa diisi
    protected $fillable = [
        'ID_Benua',
        'Benua',
    ];
}
