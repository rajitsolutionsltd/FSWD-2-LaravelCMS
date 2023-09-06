@extends('backEnd.layouts.masters')

@section('section-title', 'Edit Course')

@section('content')


<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Edit Course</h3>
        </div>

        <div class="card-body">

            {!! Form::model($course, ['route' => ['course.update', $course->id], 'method'=> 'put']) !!}

                <div class="mb-3">
                  {!!Form::label('name', 'Name')!!}
                  {!!Form::text('name', null, ['class'=> 'form-control'])!!}

                  @error('name')
                    <span class="invalid-feedback">{{$message}}</span>
                  @enderror
                </div>

                <div class="mb-3">
                    {!!Form::label('course_code', 'Course Code')!!}
                    {!!Form::text('course_code', null, ['class'=> 'form-control'])!!}
  
                    @error('course_code')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>

                <div class="mb-3">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection