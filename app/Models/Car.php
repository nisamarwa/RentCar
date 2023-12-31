<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';

    protected $fillable = ['merek', 'model', 'nomor_plat', 'tarif_sewa'];

    protected $attributes = [
        'status' => 'not rented',
    ];
}
