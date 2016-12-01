@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new team</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'TeamController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            {!! Form::label('team', 'Team name', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('team', '', ['class' => 'form-control']) !!}
                                    @if ($errors->has('team'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team') }}</strong>
                                    </span>
                                @endif                    
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

