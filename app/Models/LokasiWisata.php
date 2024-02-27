<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiWisata extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jenislokasinya()
    {
        return $this->hasOne(ComCode::class, 'code_cd', 'lokasi_wisata_tp');
    }

    public function kunjungannya()
    {
        return $this->hasMany(KunjunganLokasiWisata::class);
    }
}
