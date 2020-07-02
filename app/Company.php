<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Store;
class Company extends Model
{
    protected $table = 'companys';
    // public $primaryKey = 'id';
    // protected $guarded = array('id', 'owner_id');
    protected $guarded = [];
    // protected $company_name = 'company_name';
    // protected $company_phone = 'company_phone';
    // protected $company_addr1 = 'company_addr1';
    // protected $company_addr2 = 'company_addr2';
    // protected $company_city = 'company_city';
    // protected $state = 'state';
    // protected $zipcode = 'zipcode';
    // protected $website = 'website';

    function stores()
    {
        return $this->hasMany(Store::class);
    }
    
    function user()
    {
        return $this->belongsTo(User::class);
    }
}
