@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Store Contacts<a class="btn btn-secondary float-right" href="storecontacts/create">Add</a></h1>
    @if(count($storecontacts ?? '') > 0)
        <table id="dt" class="display dataTables" style="width:100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Store Name</th>
                        <th>Company Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
        @foreach($storecontacts ?? '' as $company)
            @foreach($company as $row)
                    <tr>
                        <td>{{$row->contact->first_name}}</td>
                        <td>{{$row->contact->last_name}}</td>
                        <td>{{$row->contact->email}}</td>
                        <td>{{$row->store->name}}</td>
                        <td>{{$row->store->company->name }}</td>
                        <td>{{ Form::model($contact ?? '',  
                                array(
                                    'action' => array('StoreContactsController@destroy', $row->id),
                                    'method' => 'DELETE'
                                    ) 
                                ) 
                    }}{{ Form::submit('Remove', array('class' => 'btn btn-danger') ) }}{{ Form::close() }}</td>

                    </tr>
                
            @endforeach
        @endforeach
            </tbody>
        </table>
    @else
        <p>No storecontacts Found</p>
    @endif
    </div>
@endsection