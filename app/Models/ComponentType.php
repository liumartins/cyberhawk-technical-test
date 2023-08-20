<?php

namespace App\Models;

use App\Models\Components;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentType extends Model
{
    use HasFactory;


    protected $fillable = [
        'name'
    ];


    public function components()
    {
        return $this->belongsTo(Components::class);
    }
}
