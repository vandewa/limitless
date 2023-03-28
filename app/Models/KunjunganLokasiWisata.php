<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KunjunganLokasiWisata extends Model
{
    use HasFactory;

    public function lokasiWisata()
    {
        return $this->belongsTo(LokasiWisata::class);
    }
}
