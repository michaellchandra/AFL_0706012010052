<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'platform', 'description'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

