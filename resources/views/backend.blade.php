@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    Hello, {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
@endsection
