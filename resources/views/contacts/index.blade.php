@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Contacts<a class="btn btn-secondary float-right" href="contacts/create">Add</a></h1>
    @if(count($contacts) > 0)
    <table id="dt" class="display dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Mobile</th>
                        <th>Contact Role</th>
                        <th>
                    </tr>
                </thead>
                <tbody>
        @foreach($contacts as $contact)
            
                    <tr>
                        <td>{{$contact->first_name}}</td>
                        <td>{{$contact->last_name }}</td>
                        <td>{{$contact->email }}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->cell_phone}}</td>
                        <td>{{ $contact->type }}</td>
                        <td><a class="btn btn-info" href="contacts/{{$contact->id}}/edit">Edit</a>
                        {{ Form::model($contact ?? '',  
                            array(
                                'action' => array('ContactsController@destroy', $contact->id),
                                'method' => 'DELETE'
                                ) 
                            ) 
                    }}{{ Form::submit('Remove', array('class' => 'btn btn-danger') ) }}{{ Form::close() }}
                        </td>
                    </tr>
        @endforeach
            </tbody>
        </table>                   
    @else
        <p>No contacts Found</p>
    @endif
    </div>
@endsection