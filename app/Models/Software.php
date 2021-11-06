<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;


    protected $table = 'software';
    protected $fillable = ['name', 'code', 'platform', 'description'];

    public function Software(){
        return $this->belongsTo(Category::class, 'category_id', 'code');
    }
}


