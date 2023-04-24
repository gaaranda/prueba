<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Mode;

class Post extends Models
{
    use HasFactory;

    public function user()
    {
        return $this->belognsTo(User::class) ;
    }

}