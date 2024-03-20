

@extends('layouts.app')
@section('main')

<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h1 class="h3">Create City</h1>
            </div>
            <div class="col text-end">
                <a href="{{ route('city') }}" class="btn btn-sm btn-dark">Back</a>
            </div>
        </div>
    </div>
    <div class="card-body">

        {!! display_bootstrap_alerts() !!}
        
        {!! Form::open(['route' => 'city.store', 'method' => 'post']) !!}

            <div class="form-group mb-3">
                {!! Form::label('name', 'Name', array('class' => 'form-label'))  !!}
                {!! Form::text('name', old('name' ?? ''), 
                          array(
                            'class' => 'form-control', 
                            'placeholder' => 'city name'
                        )) 
                !!}
                <small class="text-muted fst-italic">
                    <code>Port Numbay</code>
                </small>
            </div> <!-- form-group end -->

            <div class="form-group mb-3">
                {!! Form::submit('submit', array( 'class' => 'btn btn-dark' )) !!}
                {!! Form::reset('reset', array( 'class' => 'btn btn-outline-dark' )) !!}
            </div>

        {!! Form::close() !!}
        
    </div>
</div>

@stop
