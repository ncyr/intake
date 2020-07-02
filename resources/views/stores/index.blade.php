@extends('layouts\app')

@section('content')
    <div class="container">
    <h1>Stores<a class="btn btn-secondary float-right" href="stores/create">Add</a></h1>
    @if(count($stores) > 0)
    <table id="dt" class="display dataTable" style="width:100%"> 
                        <thead>
                            <tr>
                                <th>Store Name</th>
                                <th>Company Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
        @foreach($stores as $store)
                            <tr>
                                <td>{{ $store->name }} </td>
                                <td>{{ $store->company->name }}</td>
                                <!-- <td><a class="btn btn-info" href="contacts/{{$store->id}}">Contacts</a></td> -->
                                <td><a class="btn btn-info float-left" href="stores/{{$store->id}}/edit">Edit</a>  {{ Form::model($store ?? '',  
                                        array(
                                            'action' => array('StoresController@destroy', $store->id),
                                            'method' => 'DELETE'
                                            ) 
                                        ) 
                                        }}
                                    {{ Form::submit('Remove', array('class' => 'btn btn-danger') ) }}{{ Form::close() }}</td>
                            </tr>                
        @endforeach
                        </tbody>
            </table>
        </div>
    @else
        <p>No Stores Found</p>
    @endif
    </div>
@endsection