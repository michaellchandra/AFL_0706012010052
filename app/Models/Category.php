<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table ='categories';
    protected $primaryKey='code';
    protected $keyType = 'bigInteger';
    protected $fillable = ['category_name', 'category_code'];

    public function Software(){
        return $this->hasMany(Software::class, 'category_id', 'software_code');
    }
}
