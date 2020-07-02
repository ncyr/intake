<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Contact;
use App\StoreContact;
use App\Company;
use Auth;
use Form;

class StoreContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all the contacts that have been assigned to stores
        $storecontacts = array();

        $companys = Company::where('owner_id', Auth::id())->get();
        //check get all the stores with company id
        // $storecontacts = StoreContact::where('store_id', $storeId);
        
        foreach($companys as $company)
        {
            $stores = Store::where('company_id', $company->id)->get();
            foreach($stores as $row)
            {
                $storecontacts[] = StoreContact::where('store_id', $row->id)->get();
            }
        }

        // var_dump($storecontacts[0][0]->contact->first_name);die();
        return view('storecontacts.index')->with('storecontacts', $storecontacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allContacts = array();
        $storeCompanys = array();
        $storeArr = False;
        $stores = Store::get();
        
        foreach($stores as $store)
        {
            if(isset($store->company->id))
            {
                
                if($store->company->owner_id == Auth::id())
                {
                    $storeCompanys[$store->id] = $store->name;
                    $companys[$store->company->id] = $store->company->name;
                }

            }
                
        }
        $contacts = Contact::where('owner_id', Auth::id())->get();
        foreach($contacts as $contact){
            $allContacts[$contact->id] = $contact->first_name;
        }
        return view('storecontacts.create')->with('stores', $storeCompanys)->with('contacts', $allContacts)->with('companys', $companys);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'store_id' => 'required',
            'contact_id' => 'required',
        ]);

        if( $request->getMethod() == "POST" )
        {
            $company_id = $request->input('company_id');
            $contact_id = $request->input('contact_id');
            $store_id = $request->input('store_id');

            $company = Company::find($company_id);
            $store = Store::find($request->input('id'));
            //is owner of company
            if(Auth::id() == $company->owner_id){
                //make sure it's not a dupe
                
                if(!StoreContact::where('store_id', $store_id)->where('contact_id', $contact_id)->first())
                {
                    $sc = new StoreContact;
                    $sc->store_id = $store_id;
                    $sc->contact_id = $request->input('contact_id');
                    $sc->save();
                    return redirect('/storecontacts');
                }
                else{
                    return redirect('/storecontacts/create');
                }
            }
            else{
                $errors = array('This store is not part of the company selected.');
                return view(storecontacts.create)->with('errors', $errors);
            }
            
        }
        else{
            return false;
        }
        
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sc = new StoreContact();
        $sc::destroy($id);
        return redirect('/storecontacts');
    }
}
