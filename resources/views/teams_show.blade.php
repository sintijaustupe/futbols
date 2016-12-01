@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Teams</h4></div>

                <div class="panel-body">
                    @foreach($teams as $team)
                        <h4>"{{ $team->name }}"</h4>
                        <p>Players:</p>
                        <ul>
                            
                        </ul>
                        <p>-----------</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
