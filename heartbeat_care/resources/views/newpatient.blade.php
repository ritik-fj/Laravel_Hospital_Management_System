@extends('layouts.app')


@section('title') {{'New Patient'}} @endsection
@section('content')



<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Add New Patient') }}</div>

        <div class="card-body">

          <form action="/viewpatient" method="POST">
            @csrf
            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="name">First Name:</span>
              <input type="text" class="form-control" id="firstName" name="firstName">
            </div>
            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="name">Last Name:</span>
              <input type="text" class="form-control" id="lastName" name="lastName">
            </div>

            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="name">Date of Birth:</span>
              <input type="date" class="form-control" id="dob" name="dob">
            </div>

            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="pwd">Gender: </span>
              <select class="form-select" name="gender" aria-label="Default select example">
                <option class="form-check-input" id="male" name="gender" value="Male">Male</option>
                <option class="form-check-input" id="female" name="gender" value="Female">Female</option>
              </select>
            </div>

            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="email">Email Address:</span>
              <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="phoneNumber">Phone Number:</span>
              <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
            </div>

            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="allergies">Allergies:</span>
              <input type="text" class="form-control" id="allergies" name="allergies">
            </div>

            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="vaccines">Vaccines:</span>
              <input type="text" class="form-control" id="vaccines" name="vaccines">
            </div>

            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="prescriptions">Prescriptions:</span>
              <input type="text" class="form-control" id="prescriptions" name="prescriptions">
            </div>

            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="healthConditions">Health Conditions:</span>
              <input type="text" class="form-control" id="healthConditions" name="healthConditions">
            </div>

            <div class="form-group text-center mb-3">
              <button type="submit" class="btn btn-primary me-1 btn-lg ">Save Details</button>
              <a href="/" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancel</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>


@endsection