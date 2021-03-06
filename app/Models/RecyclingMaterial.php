<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecyclingMaterial extends Model
{
    use HasFactory;

    public function annotation() {
        return $this->hasMany(Annotation::class);
    }
}
