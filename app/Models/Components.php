<?php

namespace App\Models;

use App\Models\ComponentType;
use App\Models\TurbineDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'type_id',
        'situation'
    ];

    public function componentTypes()
    {
        return $this->hasOne(ComponentType::class);
    }

    public function turbineDetails()
    {
        return $this->hasMany(TurbineDetails::class);
    }
}
