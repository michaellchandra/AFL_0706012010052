<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;


    protected $table = 'software';
    protected $fillable = ['software_name', 'software_code', 'software_platform', 'software_description'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'software_code');
    }
}


