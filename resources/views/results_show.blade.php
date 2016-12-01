@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>All results</h4></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4"><h4>Team A</h4></div>
                        <div class="col-md-4"><h4>Team B</h4></div>
                        <div class="col-md-4"><h4>Result A:B</h4></div>
                    </div>
                        @foreach($results as $result)
                            <div class="row">
                                <div class="col-md-4">
                                    <p>"{{ $result->teamA}}"</p>
                                </div>
                                <div class="col-md-4">
                                    <p>"{{ $result->teamB}}"</p>
                                </div>
                                <div class="col-md-4">
                                    <p>{{ $result->result }}</p>
                                </div>
                            </div> 
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

