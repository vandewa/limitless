<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekraf extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function setTanggalLahirAttribute($value)
    {
        $this->attributes['tanggal_lahir'] = date('Y-m-d', strtotime($value));
    }

    public function getTanggalLahirAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('m/d/Y');
    }

    public function subsektorEkraf()
    {
        return $this->hasMany(SubsektorEkraf::class);
    }
}
