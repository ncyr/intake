<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
class Contact extends Model
{
    // protected $table = 'contacts';
    // protected $first_name = 'first_name';
    // protected $last_name = 'last_name';
    // protected $phone = 'phone';
    // protected $cell_phone = 'cell_phone';
    // protected $email = 'email';
    // protected $type = 'type';
    // public $primaryKey = 'id';
    // public $timestamps = true;
    protected $guarded = [];

    function company()
    {
        return $this->belongsTo(Company::class);
    }
    function storecontacts()
    {
        return $this->hasMany(StoreContact::class);
    }
}
