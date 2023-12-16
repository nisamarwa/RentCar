<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'rentals';
    protected $primaryKey = 'id';

    protected $fillable = ['car_id', 'start_date', 'end_date', 'customer_name', 'customer_email', 'status', 'user_id'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
