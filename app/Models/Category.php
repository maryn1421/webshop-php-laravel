<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Category constructor.
     */
    private $name;

    /**
     * Category constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }




    use HasFactory;
}
