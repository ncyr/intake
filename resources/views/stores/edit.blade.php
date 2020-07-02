@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Setup Store</h1>
    <hr>
    {{ Form::model($store ?? '',  
        array(
            'route' => array('stores.update', $store->id),
            'method' => 'PATCH'
            ) 
        ) 
    }}

        {{ Form::label('name') }}
        {{ Form::text( 'name', $store->name, array(
            'class' => 'form-control'
        )) }}

        {{ Form::label('phone') }}
        {{ Form::text( 'phone', $store->phone, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('address') }}
        {{ Form::text( 'addr1', $store->addr1, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('suite') }}
        {{ Form::text( 'addr2', $store->addr2, array(
            'class' => 'form-control'
        )) }}

        {{ Form::label('city') }}
        {{ Form::text( 'city', $store->city, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('state') }}
        {{ Form::text( 'state', $store->state, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('zipcode') }}
        {{ Form::text( 'zipcode', $store->zipcode, array(
            'class' => 'form-control'
        )) }}
        <hr>
        {{ Form::label('ship_to_address') }}
        {{ Form::checkbox( 'ship_address', $store->ship_address, array(
            'class' => 'form-control'
        )) }}
        <hr>
        {{ Form::label('ship_name') }}
        {{ Form::text( 'ship_name', $store->ship_name, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_addr1') }}
        {{ Form::text( 'ship_addr1', $store->ship_addr1, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_addr2') }}
        {{ Form::text( 'ship_addr2', $store->ship_addr2, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_city') }}
        {{ Form::text( 'ship_city', $store->ship_city, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_state') }}
        {{ Form::text( 'ship_state', $store->ship_state, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_zip') }}
        {{ Form::text( 'ship_zip', $store->ship_zip, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('company_id') }}
        {{ Form::select('company_id', $companys, false, array(
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