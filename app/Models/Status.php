<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //属于user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
