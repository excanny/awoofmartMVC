<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'tcarts';

    protected $fillable = [
        'fproduct_id',
        'fmerchant_id',
        'fprice',
        'fshopper_id',
        'fquantity'
    ];
}