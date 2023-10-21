<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "product_name",
        "client_name",
        "client_email",
        "phone",
        "shipping_address",
        "product_type",
        "date",
        "condition",
        ];
}
