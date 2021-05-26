<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    
   protected $fillable = ['make','model','year','engineSize','description'];
   public function carmodels(){
    return $this->hasMany(CarModel::class);
   }
   public function carmakes(){
    return $this->hasMany(CarMake::class);
   }
}
