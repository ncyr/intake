<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;
use Form;
class CompanysController extends Controller
{

    // public function __construct()
    // {
    //     var_dump(Auth::id());
    //     $this->companys = Company::all()->where('owner_id', Auth::id());
        
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys = Company::all()->where('owner_id', Auth::id());
        return view('companys.index')->with('companys', $companys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('companys.create');
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
            'zipcode' => 'numeric|min:5',
            'website' => 'nullable',
            'user_id' => 'unique:users,id', 
        ]);
        if( $request->getMethod() == "POST" )
        {
            $company = new Company;
            $company->name = $request->input('name');
            $company->phone = $request->input('phone');
            $company->addr1 = $request->input('addr1');
            $company->addr2 = $request->input('addr2');
            $company->city = $request->input('city');
            $company->state = $request->input('state');
            $company->zipcode =$request->input('zipcode');
            $company->website =$request->input('website');
            $company->owner_id = Auth::id();
            $company->save();
            redirect('/');
        }
        else {
        }
        return redirect('/companys');
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
        $company = False;
        $company = Company::find($id);
        return view('companys.edit')->with('company', $company);
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
        // var_dump($request->request);die();
        $this->validate($request, [
            'name' => 'required',
            'zipcode' => 'numeric|min:5',
            'website' => 'nullable'
        ]);
        if( $request->getMethod() == "PATCH" )
        {
            $company = Company::find($id);
            $company->name = $request->input('name');
            $company->phone = $request->input('phone');
            $company->addr1 = $request->input('addr1');
            $company->addr2 = $request->input('addr2');
            $company->city = $request->input('city');
            $company->state = $request->input('state');
            $company->zipcode =$request->input('zipcode');
            $company->website =$request->input('website');
            $company->owner_id = Auth::id();
            try
            {
                $saved = $company->save();
            }catch(Exception $e){
                report(e);
                return false;
            }
        }

        return view('companys.edit')->with('company', $company)->with('saved', $saved);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = new Company();
        $company::destroy($id);
        return redirect('/companys');
    }
}
