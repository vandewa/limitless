<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelakuWisata extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setTglNibAttribute($value)
    {
        $this->attributes['tgl_nib'] = date('Y-m-d', strtotime($value));
    }

    public function getTglNibAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('m/d/Y');
    }
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
        return $this->hasMany(SubsektorPelakuWisata::class);
    }

    public function sertifikatnya()
    {
        return $this->hasMany(Certificate::class);
    }

    public function getPreviewImageAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['logo'])) ?? asset('notfound.jpg');
        return $devan;
    }

    // public usahaPariwisata()
    // {
    //     return $this->belongsTo(MasterDataUsahaPariwisata::)
    // }
}