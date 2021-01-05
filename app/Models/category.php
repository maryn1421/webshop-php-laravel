<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $name;


    public function latestComments()
    {
        return $this->products()->orderBy('views', 'desc')->nPerGroup('category_id', 5);
    }

    /**
     * Post has many Comments
     *
     * @return
     */
    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('product');
    }

}
