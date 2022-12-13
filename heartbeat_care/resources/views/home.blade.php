@extends('layouts.app')
@section('title') {{'Home'}} @endsection
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Welcome to HeartBeat Care') }}</div>

                <div class="list-group text-center">

                    <a href="/newpatient" class="list-group-item list-group-item-action">Add New Patients</a>
                    <a href="/viewpatient" class="list-group-item list-group-item-action">View All Patients</a>
                    <a href="/viewusers" class="list-group-item list-group-item-action">View All Hospital Staff</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection