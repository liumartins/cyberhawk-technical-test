<?php

namespace App\Models;

use App\Models\TurbineDetails;
use App\Models\Components;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turbine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    public function turbineDetails()
    {
        return $this->hasOne(TurbineDetails::class);
    }

    public function components()
    {
        return $this->hasManyThrough(
            Components::class, TurbineDetails::class, 'turbine_id', 'id');
    }
}
