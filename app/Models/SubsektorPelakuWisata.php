<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsektorPelakuWisata extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subsektornya()
    {
        return $this->belongsTo(Subsektor::class, 'subsektor_id');
    }
}
