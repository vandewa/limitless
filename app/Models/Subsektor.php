<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsektor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ekraf() {
        return $this->hasMany(SubsektorEkraf::class, 'subsektor_id');
    }

}
