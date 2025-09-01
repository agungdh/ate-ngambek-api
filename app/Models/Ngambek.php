<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ngambek extends Model
{
    /** @use HasFactory<\Database\Factories\NgambekFactory> */
    use HasFactory;

    public function selesai(): HasOne {
        return $this->hasOne(Selesai::class);
    }
}
