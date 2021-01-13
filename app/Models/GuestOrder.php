<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestOrder extends Model
{
    use HasFactory;

    private $name;
    private $email;
    private $state;
    private $city;
    private $address;
    private $phone;
    private $zip;
    private $status;


}
