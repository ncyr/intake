@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Edit Company</h1>
    <hr>
    {{ Form::model($company ?? '',  
        array(
            'route' => [ 'companys.update', $company->id ],
            'method' => 'PATCH'
            ) 
        ) 
    }}

        {{ Form::label('name') }}
        {{ Form::text( 'name', $company['name'], array(
            'class' => 'form-control'
        )) }}

        {{ Form::label('phone') }}
        {{ Form::text( 'phone', $company['phone'], array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('addr1') }}
        {{ Form::text( 'addr1', $company['addr1'], array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('addr2') }}
        {{ Form::text( 'addr2', $company['addr2'], array(
            'class' => 'form-control'
        )) }}

        {{ Form::label('city') }}
        {{ Form::text( 'city', $company['city'], array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('state') }}
        {{ Form::text( 'state', $company['state'], array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('zipcode') }}
        {{ Form::number( 'zipcode', $company['zipcode'], array(
            'class' => 'form-control'
        )) }}
        {{ Form::label('website') }}
        {{ Form::text( 'website', $company['website'], array(
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