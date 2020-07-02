@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Add Store Contact</h1>
    <hr>
    {{ Form::model('storecontacts',  
        array(
            'route' => array('storecontacts.store', Auth::id())
            ) 
        ) 
    }}
        {{ Form::label('company') }}
        {{ Form::select('company_id', $companys, array(
            'class' => 'form-control'
        )) }} 
        <hr>
        {{ Form::label('store') }}
        {{ Form::select('store_id', $stores , array(
            'class' => 'form-control'
        )) }} 
        <hr>  
        {{ Form::label('contact') }}
        {{ Form::select('contact_id', $contacts, array(
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