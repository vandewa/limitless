<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uspar extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function usparnya()
    {
        return $this->belongsTo(MasterDataUsahaPariwisata::class, 'master_data_usaha_pariwisata_id');
    }

    
}
