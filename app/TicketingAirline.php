<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketingAirline extends Model
{
    protected $guarded = ['id'];

    private $statuses = [
        0 => 'Inactive',
        1 => 'Active'
    ];

    public function getStatusTitleAttribute()
    {
        return $this->statuses[$this->status];
    }
}
