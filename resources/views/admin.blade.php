@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administrator Panel</div>
                <div class="panel-body">
                    <ul class="list">
                       <li><a href="{{ url('team/create') }}">Add a new team</a></li>
                       <li><a href="{{ url('result/create') }}">Add a result</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

