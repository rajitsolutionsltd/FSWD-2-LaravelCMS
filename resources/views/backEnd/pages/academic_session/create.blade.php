@extends('backEnd.layouts.masters')

@section('section-title', 'Academic Session')

@section('content')


<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Add a new Academic Session</h3>
        </div>

        <div class="card-body">

            {!! Form::open(['route' => 'academic-session.store', 'method'=> 'post']) !!}

                <div class="mb-3">
                  {!!Form::label('name', 'Name')!!}
                  {!!Form::text('name', null, ['class'=> 'form-control'])!!}

                  @error('name')
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