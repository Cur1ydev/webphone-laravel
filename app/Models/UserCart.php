<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCart extends Model
{
    use HasFactory;

    protected $table = 'user_cart';
    protected $fillable = [
        'id_cart',
        'name_user',
        'email',
        'phone_number',
        'address'
    ];
}
