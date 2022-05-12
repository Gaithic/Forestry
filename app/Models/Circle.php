<?php

namespace App\Models;

use App\Models\Circle as ModelsCircle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
   
    public function divisions()
    {
        return $this->hasMany(Division::class, 'circle_id');
    }
}
