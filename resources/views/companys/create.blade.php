@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Setup Company</h1>
    <hr>
    {{ Form::model($company ?? '',  
        array(
            'route' => array('companys.store')
            ) 
        ) 
    }}

        {{ Form::label('name') }}
        {{ Form::text( 'name', false, array(
            'class' => 'form-control',
            'required' => true
        )) }}

        {{ Form::label('phone') }}
        {{ Form::text( 'phone', '(555)555-5555', array(
            'class' => 'form-control',
            'required' => true
        )) }}
        {{ Form::label('addr1') }}
        {{ Form::text( 'addr1', false, array(
            'class' => 'form-control',
            'required' => true
        )) }}
        {{ Form::label('addr2') }}
        {{ Form::text( 'addr2', false, array(
            'class' => 'form-control'
        )) }}

        {{ Form::label('city') }}
        {{ Form::text( 'city', false, array(
            'class' => 'form-control',
            'required' => true
        )) }}
        {{ Form::label('state') }}
        {{ Form::text( 'state', false, array(
            'class' => 'form-control',
            'required' => true
        )) }}
        {{ Form::label('zipcode') }}
        {{ Form::number( 'zipcode', false, array(
            'class' => 'form-control',
            'required' => true
        )) }}
        {{ Form::label('website') }}
        {{ Form::text( 'website', false, array(
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