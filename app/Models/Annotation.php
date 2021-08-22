<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_id',
        'recycling_material_id',
        'start_hour',
        'end_hour'
    ];

    public function day() {
        return $this->belongsTo(Day::class);
    }

    public function recyclingMaterial() {
        return $this->belongsTo(RecyclingMaterial::class);
    }
}
