<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassportStatus extends Model
{
    protected $guarded = ['id'];

    public function passports()
    {
        return $this->belongsToMany(PassportStatus::class, 'passport_history', 'passport_status_id', 'passport_id')->withPivot('date')->withTimestamps();
    }
}
