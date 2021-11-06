<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table ='categories';
    protected $primaryKey='code';
    protected $keyType = 'string';
    protected $fillable = ['name', 'code'];

    public function Category(){
        return $this->hasMany(Software::class, 'category_id', 'code');
    }
}
