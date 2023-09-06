@extends('backEnd.layouts.masters')

@section('section-title', 'Course Lists')

@section('content')


<div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Courses</h3>

            <a href="{{route('course.create')}}" class="btn btn-primary">Add New Course</a>
        </div>

        <div class="card-body">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Course Code</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->course_code}}</td>
                            <td>
                                <a href="{{route('course.edit', $course->id)}}" class="btn btn-info">Edit</a>
                                
                                <a href="#" onclick="deleteItem('#course-form-{{$course->id}}')" class="btn btn-danger">Delete</a>

                                {!! Form::open(['route'=> ['course.destroy', $course->id], 'method'=> 'post', 'id'=> 'course-form-'.$course->id]) !!}
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