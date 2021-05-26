<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMake extends Model
{
    use HasFactory;
    protected $table = 'car_makes';
    protected $fillable = ['name'];
    public function car(){
        return $this->belongsTo(Car::class);
    }
    
    
}
