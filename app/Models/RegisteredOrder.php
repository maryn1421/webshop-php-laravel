<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredOrder extends Model
{
    use HasFactory;

    private $cart;
    private $user_id;
    private $status;
}
