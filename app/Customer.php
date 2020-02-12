<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_of_birth' => 'datetime:d-m-Y',
    ];

    public function getFullNameAttribute(){
        return $this->given_name . ' ' . $this->sur_name;
    }

    public function passport()
    {
        return $this->belongsTo(CustomerPassport::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function maharam()
    {
        return $this->belongsTo(Customer::class);
    }

    public function dependent()
    {
        return $this->belongsTo(Customer::class);
    }

    public function hajj()
    {
        return $this->hasOne(Hajj::class);
    }
}
