@extends('backEnd.layouts.masters')

@section('section-title', 'Academic Year')

@section('content')


<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Add a new Academic Year</h3>
        </div>

        <div class="card-body">

            {!! Form::open(['route' => 'academic-year.store', 'method'=> 'post']) !!}

                <div class="mb-3">
                  {!!Form::label('name', 'Name')!!}
                  {!!Form::text('name', null, ['class'=> 'form-control'])!!}

                  @error('name')
                    <span class="invalid-feedback">{{$message}}</span>
                  @enderror
                </div>

                <div class="mb-3">
                    {!!Form::label('order_level', 'Order Level')!!}
                    {!!Form::text('order_level', null, ['class'=> 'form-control'])!!}
  
                    @error('order_level')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    {!!Form::label('course', 'Course')!!}
                    {!!Form::select('course',$courseOptions , null, ['class'=> 'form-select', 'placeholder'=> '--Select a Course--'])!!}
  
                    @error('course')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection