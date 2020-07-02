<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use Auth;
class Store extends Model
{
    // protected $table = 'stores';
    // protected $name = 'name';
    // protected $phone = 'phone';
    // protected $addr1 = 'addr1';
    // protected $addr2 = 'addr2';
    // protected $city = 'city';
    // protected $state = 'state';
    // protected $zipcode = 'zipcode';
    // protected $ship_address = 'ship_address';
    // protected $ship_name = 'ship_name';
    // protected $ship_addr1 = 'ship_addr1';
    // protected $ship_addr2 = 'ship_addr2';
    // protected $ship_city = 'ship_city';
    // protected $ship_state = 'ship_state';
    // protected $ship_zip = 'ship_zip';
    // protected $company_id = 'company_id';
    // public $primaryKey = 'id';
    // public $timestamps = true;

    protected $guarded = [];

    function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    function company()
    {
        $company =  $this->belongsTo(Company::class);
        return $company->where('owner_id', Auth::id());
    }

}
