<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "product_name",
        "price",
        "product_type",
        "size",
        "phone",
        "socials",
        "condition",
        "img"
        ];
}
