<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPassport extends Model
{
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
