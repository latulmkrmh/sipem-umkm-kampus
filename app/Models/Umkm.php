<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkm';

    protected $fillable = [
        'nama_umkm',
        'pemilik',
        'kategori',
        'deskripsi',
        'alamat',
        'kontak',
        'jam_operasional',
        'status'
    ];

    public function monitoring()
    {
        return $this->hasMany(Monitoring::class);
    }
}

