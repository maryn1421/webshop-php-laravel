<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    private $name;

    private $categoryId;

    /**
     * Product constructor.
     * @param $name
     * @param $categoryId
     */
    public function __construct($name, $categoryId)
    {
        $this->name = $name;
        $this->categoryId = $categoryId;
    }

    use HasFactory;
}
