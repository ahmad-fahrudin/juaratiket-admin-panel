<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $guarded = [];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
