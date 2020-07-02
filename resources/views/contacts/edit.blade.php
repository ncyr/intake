@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Edit Contact</h1>
    <hr>
    {{ Form::model($contact ?? '',  
        array(
            'route' => array('contacts.update', $contact->id),
            'method' => "PATCH"
            ) 
        ) 
    }}

        {{ Form::label('first_name') }}
        {{ Form::text( 'first_name', $contact->first_name, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('last_name') }}
        {{ Form::text( 'last_name', $contact->last_name, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('phone') }}
        {{ Form::text( 'phone', $contact->phone, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('cell_phone') }}
        {{ Form::text( 'cell_phone', $contact->cell_phone, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('email') }}
        {{ Form::text( 'email', $contact->email, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('type') }}
        {{ Form::select('type', array(
            'corporate' => 'Corporate', 'it' => "IT Staff", 'rm' => 'Regional Manager', 'gm' => 'Store General Manager', 'slead' => 'Shift Lead', 
        ), $contact->type, array(
            'class' => 'form-control'
        )) }}
        <hr>
        {{ Form::submit('Save', array(
            'class' => 'btn btn-success'
        )) }}
        {{ Form::button('Back', array(
            'class' => 'btn btn-danger float-right',
            'onClick' => "window.location.assign('/contacts'); return false;"
        )) }}
    {{ Form::close() }}
        
    </div>
@endsection