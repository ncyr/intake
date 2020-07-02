@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Setup Store</h1>
    <hr>
    {{ Form::model($store ?? '',  
        array(
            'route' => array('stores.store', Auth::id())
            ) 
        ) 
    }}

        {{ Form::label('name') }}
        {{ Form::text( 'name', false, array(
            'class' => 'form-control'
        )) }}

        {{ Form::label('phone') }}
        {{ Form::text( 'phone', '(555)555-5555', array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('address') }}
        {{ Form::text( 'addr1', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('suite') }}
        {{ Form::text( 'addr2', false, array(
            'class' => 'form-control'
        )) }}

        {{ Form::label('city') }}
        {{ Form::text( 'city', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('state') }}
        {{ Form::text( 'state', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('zipcode') }}
        {{ Form::text( 'zipcode', false, array(
            'class' => 'form-control'
        )) }}
        <hr>
        {{ Form::label('ship_to_address') }}
        {{ Form::checkbox( 'ship_address', false, array(
            'class' => 'form-control'
        )) }}
        <hr>
        {{ Form::label('ship_name') }}
        {{ Form::text( 'ship_name', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_addr1') }}
        {{ Form::text( 'ship_addr1', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_addr2') }}
        {{ Form::text( 'ship_addr2', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_city') }}
        {{ Form::text( 'ship_city', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_state') }}
        {{ Form::text( 'ship_state', false, array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('ship_zip') }}
        {{ Form::text( 'ship_zip', false, array(
            'class' => 'form-control'
        )) }}
        
        {{ Form::label('company_id') }}
        <!-- {{ Form::select('company_id', $companys, false, array(
            'class' => 'form-control'
        )) }} -->
        <select name="company_id" class="form-control">
            @foreach($companys as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
        </select>
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