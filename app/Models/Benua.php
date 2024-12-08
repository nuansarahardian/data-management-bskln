<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benua extends Model
{
    use HasFactory;

    protected $table = 'tbbenua';
    protected $primaryKey = 'ID_Benua';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['ID_Benua', 'Benua'];

    // Relasi ke model Kawasan
    public function kawasan()
    {
        return $this->hasMany(Kawasan::class, 'ID_Benua', 'ID_Benua');
    }
}
