<?php

namespace App\Models;

use App\Models\Turbine;
use App\Models\Components;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurbineDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'turbine_id',
        'component_id'
    ];

    public function turbine()
    {
        return $this->belongsTo(Turbine::class);
    }

    public function components()
    {
        return $this->hasMany(Components::class);
    }
}
