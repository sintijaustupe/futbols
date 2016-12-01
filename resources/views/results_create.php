@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Create a new result</h4></div>

                <div class="panel-body">
                    @foreach($errors->all() as $message)
                        <p class="has-error">{{ $message }}</p>
                    @endforeach
                    {!! Form::open(['action' => 'ResultsController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

