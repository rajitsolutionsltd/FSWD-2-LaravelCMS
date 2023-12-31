@extends('backEnd.layouts.masters')

@section('section-title', 'Academic Session Lists')

@section('content')


<div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Academic Sessions</h3>

            <a href="{{route('academic-session.create')}}" class="btn btn-primary">Add New Session</a>
        </div>

        <div class="card-body">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($academicSessions as $session)
                        <tr>
                            <td>{{$session->id}}</td>
                            <td>{{$session->name}}</td>
                            <td>
                                <a href="{{route('academic-session.edit', $session->id)}}" class="btn btn-info">Edit</a>
                                
                                <a href="#" onclick="deleteItem('#academic-session-form-{{$session->id}}')" class="btn btn-danger">Delete</a>

                                {!! Form::open(['route'=> ['academic-session.destroy', $session->id], 'method'=> 'post', 'id'=> 'academic-session-form-'.$session->id]) !!}
                                    @method('delete')
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection