<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
