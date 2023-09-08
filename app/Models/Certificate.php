<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jenisSertifikat()
    {
       return $this->belongsTo(ComCode::class, 'jenis_sertifikat_tp');
    }
}
