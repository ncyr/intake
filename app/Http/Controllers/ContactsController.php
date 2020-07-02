<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = Contact::all()->where('owner_id', Auth::id());
        return view('contacts.index')->with('contacts', $arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'numeric|min:10',
            'cell_phone' => 'numeric|min:10',
            'email' => 'email'
        ]);
        if( $request->getMethod() == "POST" )
        {
            $contact = new Contact;
            $contact->first_name = $request->input('first_name');
            $contact->last_name = $request->input('last_name');
            $contact->phone = $request->input('phone');
            $contact->cell_phone = $request->input('cell_phone');
            $contact->email = $request->input('email');
            $contact->type = $request->input('type');
            $contact->owner_id = Auth::id();
            $contact->save();
        }
        else {
        }
        return redirect('/contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($company_id)
    {
        //$company = Company::find($id);
        $contacts = Contact::where('company_id', $company_id);
        return view('contacts.show')->with('contacts', $contacts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = False;
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contact', $contact);
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'numeric|min:10',
            'cell_phone' => 'numeric|min:10',
            'email' => 'email'
        ]);
        if( $request->getMethod() == "PATCH" )
        {
            $contact = Contact::find($id);
            $contact->first_name = $request->input('first_name');
            $contact->last_name = $request->input('last_name');
            $contact->phone = $request->input('phone');
            $contact->cell_phone = $request->input('cell_phone');
            $contact->email = $request->input('email');
            $contact->type = $request->input('type');
            $contact->owner_id = Auth::id();
            $contact->save();
        }
        try
        {
            $saved = $contact->save();
        }catch(Exception $e){
            report(e);
            return false;
        }
        return view('contacts.edit')->with('contact', $contact)->with('saved', $saved);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = new Contact();
        $contact::destroy($id);
        return redirect('/contacts');
    }
}
