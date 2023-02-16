<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ekraf extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subsektorEkraf()
    {
        return $this->hasMany(SubsektorEkraf::class);
    }

}
