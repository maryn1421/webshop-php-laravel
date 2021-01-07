<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;

    private $username;
    private $name;
    private $email;
    private $state;
    private $city;
    private $address;
    private $phone;
    private $password;
    private $zip;

    /*
     *  $table->string('username');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('state');
            $table->string('address');
            $table->string('phone');
            $table->string('password');
            $table->string('zip');
     */



}
