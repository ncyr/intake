@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Add Contact</h1>
    <hr>
    {{ Form::model($contact ?? '',  
        array(
            'route' => array('contacts.store', Auth::id())
            ) 
        ) 
    }}

        {{ Form::label('first_name') }}
        {{ Form::text( 'first_name', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('last_name') }}
        {{ Form::text( 'last_name', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('phone') }}
        {{ Form::text( 'phone', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('cell_phone') }}
        {{ Form::text( 'cell_phone', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('email') }}
        {{ Form::text( 'email', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('type') }}
        {{ Form::select('type', array(
            'corporate' => 'Corporate', 'it' => "IT Staff", 'rm' => 'Regional Manager', 'gm' => 'Store General Manager', 'slead' => 'Shift Lead', 
        ), 'corporate', array(
            'class' => 'form-control'
        )) }}
        <hr>
        {{ Form::submit('Save', array(
            'class' => 'btn btn-success'
        )) }}
        {{ Form::button('Back', array(
            'class' => 'btn btn-danger float-right',
            'onClick' => "window.history.go(-1); return false;"
        )) }}
    {{ Form::close() }}
        
    </div>
@endsection