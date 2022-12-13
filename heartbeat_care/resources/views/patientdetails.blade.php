@extends('layouts.app')
@section('title') {{'Edit Patient'}} @endsection
@section('content')

<div class="container">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm" tabindex="-1" role="button">Go Back</a>
    </div>
    <div class="row">
        <div class="col-md-12">

            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Details of {{$patients['firstName']}} {{$patients['lastName']}}</h4>
                </div>
                <div class="card-body">

                    <h5>Personal Details</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">First Name</label>
                            <div class="p-2 border">{{$patients['firstName']}}</div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Last Name</label>
                            <div class="p-2 border">{{$patients['lastName']}}</div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Gender</label>
                            <div class="p-2 border">{{$patients['gender']}}</div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Date of Birth</label>
                            <div class="p-2 border">{{$patients['dob']}}</div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Email Address</label>
                            <div class="p-2 border">{{$patients['email']}}</div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Phone Number</label>
                            <div class="p-2 border">{{$patients['phoneNumber']}}</div>
                        </div><br><br>

                        <br><br>
                        <h5>Medical Details</h5>
                        <hr>
                        <div class="col-md-4">
                            <label for="">Allergies</label>
                            <div class="p-2 border">{{$patients['allergies']}}</div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Vaccines</label>
                            <div class="p-2 border">{{$patients['vaccines']}}</div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Prescriptions</label>
                            <div class="p-2 border">{{$patients['prescriptions']}}</div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Health Conditions</label>
                            <div class="p-2 border">{{$patients['healthConditions']}}</div>
                        </div><br><br>

                        <br><br>
                        <h5>Financial Details</h5>
                        <hr>

                        <a href="{{"patientpayments/".$patients['id']}}" class="btn btn-secondary btn-info" tabindex="-1" role="button">Patient Financial Details</a>

                        <a href="{{"addpayment/".$patients['id']}}" class="btn btn-secondary " tabindex="-1" role="button">New Payment</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection