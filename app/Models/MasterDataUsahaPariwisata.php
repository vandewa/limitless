<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDataUsahaPariwisata extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function data_usparnya()
    {
        return $this->hasMany(Uspar::class);
    }
}
