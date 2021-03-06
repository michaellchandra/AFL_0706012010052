<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $table ='categories';
    // protected $primaryKey='code';
    // protected $keyType = 'bigInteger';
    protected $guarded = ['id'];

    public function software(){
        return $this->hasMany(Software::class);
    }
}
