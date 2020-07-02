<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreContact extends Model
{
    function store()
    {
        return $this->belongsTo(Store::class);
    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}

