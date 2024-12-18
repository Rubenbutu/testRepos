<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
    public function decces()
    {
        return $this->hasMany(Deces::class);
    }
    public function retrouves()
    {
        return $this->hasMany(Retrouve::class);
    } 
    public function naissance()
    {
        return $this->hasMany(Naissance::class);
    }
}
