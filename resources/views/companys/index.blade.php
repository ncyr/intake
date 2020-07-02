@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Company <a class="btn btn-secondary float-right" href="companys/create">Add</a></h1>
    @if(count($companys) > 0)
        @foreach($companys as $company)
            @if($company->owner_id == Auth::id())
                <table id="dt" class="display dataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{ $company->city }}</td>
                            <td>{{ $company->state }}</td>
                            <td>{{ $company->phone }}</td>
                            <td>{{ Form::model($companys ?? '',  
                                    array(
                                        'action' => array('CompanysController@destroy', $company->id),
                                        'method' => 'DELETE'
                                        )) 
                                }}
                                <a class="btn btn-info" href="companys/{{$company->id}}/edit">Edit</a> 
                            {{ Form::submit('Remove', array('class' => 'btn btn-danger') ) }}
                            {{ Form::close() }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endif
        @endforeach
    @else
        <p>No Companys Found</p>
    @endif
    </div>
@endsection