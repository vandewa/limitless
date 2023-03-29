<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekraf extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getTanggalLahirAttribute($value)
    {
        $from_db = \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('m/d/Y');
        return $from_db;
    }

    public function subsektorEkraf()
    {
        return $this->hasMany(SubsektorEkraf::class);
    }
}
