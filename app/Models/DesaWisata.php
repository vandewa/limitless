<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaWisata extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(ComRegion::class, 'region_kec');
    }

    public function kelurahan()
    {
        return $this->belongsTo(ComRegion::class, 'region_kel');
    }
}
