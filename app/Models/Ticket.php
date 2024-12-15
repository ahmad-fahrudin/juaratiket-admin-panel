<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function photos()
    {
        return $this->hasMany(TicketPhoto::class);
    }

    public function transactions()
    {
        return $this->hasMany(BookingTransaction::class);
    }
}
