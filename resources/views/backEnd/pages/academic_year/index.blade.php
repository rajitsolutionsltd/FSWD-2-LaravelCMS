@extends('backEnd.layouts.masters')

@section('section-title', 'Academic Year Lists')

@section('content')


<div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Academic Years</h3>

            <a href="{{route('academic-year.create')}}" class="btn btn-primary">Add New Year</a>
        </div>

        <div class="card-body">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Order Level</th>
                        <th>Course</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($academicYears as $year)
                        <tr>
                            <td>{{$year->id}}</td>
                            <td>{{$year->name}}</td>
                            <td>{{$year->order_level}}</td>
                            <td>{{$year->course->name}}</td>
                            <td>
                                <a href="{{route('academic-year.edit', $year->id)}}" class="btn btn-info">Edit</a>
                                
                                <a href="#" onclick="deleteItem('#academic-year-form-{{$year->id}}')" class="btn btn-danger">Delete</a>

                                {!! Form::open(['route'=> ['academic-year.destroy', $year->id], 'method'=> 'post', 'id'=> 'academic-year-form-'.$year->id]) !!}
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