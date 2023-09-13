<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekraf extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subsektorEkraf()
    {
        return $this->hasMany(SubsektorEkraf::class);
    }
}