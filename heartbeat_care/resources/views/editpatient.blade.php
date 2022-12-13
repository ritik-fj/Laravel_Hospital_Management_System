@extends('layouts.app')
@section('title') {{'Edit Patient'}} @endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Patient Details') }}</div>

                <div class="card-body">
                    <form action="{{ url('update-data/'.$patients['id'])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="firstName">First Name</span>
                            <input type="text" name="firstName" value="{{$patients['firstName']}}" class="form-control">
                        </div>
                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="lastName">Last name</span>
                            <input type="text" name="lastName" value="{{$patients['lastName']}}" class="form-control">
                        </div>

                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="dob">Date of Birth:</span>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{$patients['dob']}}">
                        </div>

                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="gender">Gender: </span>
                            <select class="form-select" name="gender" aria-label="Default select example" value="{{$patients['gender']}}">
                                <option class="form-check-input" id="male" name="gender" >Male</option>
                                <option class="form-check-input" id="female" name="gender" >Female</option>
                            </select>
                        </div>

                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="email">Email Address:</span>
                            <input type="text" class="form-control" id="email" name="email" value="{{$patients['email']}}">
                        </div>

                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="phoneNumber">Phone Number:</span>
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="{{$patients['phoneNumber']}}">
                        </div>

                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="allergies">Allergies:</span>
                            <input type="text" class="form-control" id="allergies" name="allergies" value="{{$patients['allergies']}}">
                        </div>

                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="vaccines">Vaccines:</span>
                            <input type="text" class="form-control" id="vaccines" name="vaccines" value="{{$patients['vaccines']}}">
                        </div>

                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="prescriptions">Prescriptions:</span>
                            <input type="text" class="form-control" id="prescriptions" name="prescriptions" value="{{$patients['prescriptions']}}">
                        </div>

                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" for="healthConditions">Health Conditions:</span>
                            <input type="text" class="form-control" id="healthConditions" name="healthConditions" value="{{$patients['healthConditions']}}">
                        </div>

                        <div class="form-group text-center mb-3">
                            
                            <button type="submit" class="btn btn-primary me-1 btn-lg">Update Patient</button>
                            <a href="/viewpatient" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancel</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection