<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelakuWisata extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subsektorEkraf()
    {
        return $this->hasMany(SubsektorPelakuWisata::class);
    }
}
