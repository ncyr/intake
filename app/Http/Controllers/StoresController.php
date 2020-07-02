<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Store;
use App\Company;
use App\Contact;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = array();

        //where company id is equal to a store user
        $companys = Company::where('owner_id', Auth::id())->get();
        foreach($companys as $row){
            $stores = Store::where('company_id', $row->id)->get();
        }
        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $companys = Company::all()->where('owner_id', Auth::id());
        // foreach($companys as $company){
        //     $allCompany[$company->id] = $company->name; 
        // }
        return view('stores.create', compact('companys'));
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
            'name' => 'required',
            'phone' => 'required',
            'addr1' => 'required',
            'addr2' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'ship_address' => 'nullable',
            'ship_name' => 'nullable',
            'ship_city' => 'nullable',
            'ship_addr2' => 'nullable',
            'ship_state' => 'nullable',
            'ship_zip' => 'nullable',
            'company_id' => 'required'
        ]);
        //check to see they own the company_id they are submitting.
        // if($request->input('company_id') == Auth::user())
        // {
            if( $request->getMethod() == "POST" )
            {
                $store = new Store;
                $store->name = $request->input('name');
                $store->phone = $request->input('phone');
                $store->addr1 = $request->input('addr1');
                $store->addr2 = $request->input('addr2');
                $store->city = $request->input('city');
                $store->state = $request->input('state');
                $store->zipcode = $request->input('zipcode');
                $store->ship_address = $request->input('ship_address');
                $store->ship_name = $request->input('ship_name');
                $store->ship_city = $request->input('ship_city');
                $store->ship_addr2 = $request->input('ship_addr2');
                $store->ship_state = $request->input('ship_state');
                $store->ship_zip = $request->input('ship_zip');
                $store->company_id = $request->input('company_id');
                
                $store->save();
                return redirect('/stores');
            }
            else {
            }
        // }
        return redirect('/stores');
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
        $store = False;
        $store = Store::find($id);
        $companys = Company::where('owner_id', Auth::id())->get();
        
        foreach($companys as $row){
            $allCompanys[$row->id] = $row->name;
        }
        return view('stores.edit')->with('store', $store)->with('companys', $allCompanys);
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
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'addr1' => 'required',
            'addr2' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'ship_address' => 'nullable',
            'ship_name' => 'nullable',
            'ship_city' => 'nullable',
            'ship_addr2' => 'nullable',
            'ship_state' => 'nullable',
            'ship_zip' => 'nullable',
        ]);
        //check to see they own the company_id they are submitting.
        // if($request->input('company_id') == Auth::user())
        // {dadas
            if( $request->getMethod() == "POST" )
            {
                $store = Store::find($id);
                $store->name = $request->input('name');
                $store->phone = $request->input('phone');
                $store->addr1 = $request->input('addr1');
                $store->addr2 = $request->input('addr2');
                $store->city = $request->input('city');
                $store->state = $request->input('state');
                $store->zipcode = $request->input('zipcode');
                $store->ship_address = $request->input('ship_address');
                $store->ship_name = $request->input('ship_name');
                $store->ship_city = $request->input('ship_city');
                $store->ship_addr2 = $request->input('ship_addr2');
                $store->ship_state = $request->input('ship_state');
                $store->ship_zip = $request->input('ship_zip');
                $store->company_id = $request->input('company_id');
                $store->save();
                return redirect('/stores');
            }
            else {
            }
        // }
        return redirect('/stores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = new Store();
        $store::destroy($id);
        return redirect('/stores');
    }
}
