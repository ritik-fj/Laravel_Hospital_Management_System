@extends('layouts.app')
@section('title') {{'View Patient'}} @endsection
@section('content')



<div class="container">
  <div class="row justify-content-center ">

    @if(session('status')))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    <h3>Patient Records</h3>
    <hr>
    <table class="table table-bordered ">
      <thead class="table-dark">
        <tr>
          <th>Patient ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Email Address</th>
          <th>Phone Number</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      @foreach($patients as $patient)
      <tbody class="table-light">
        <tr>
          <td>{{ $patient->id }}</td>
          <td>{{ $patient->firstName }}</td>
          <td>{{ $patient->lastName }}</td>
          <td>{{ $patient->gender }}</td>
          <td>{{ $patient->email }}</td>
          <td>{{ $patient->phoneNumber }}</td>
          <td> <a href={{"editpatient/".$patient['id']}} class="btn btn-success">Edit</a></td>
          <td> <a href={{"patientdetails/".$patient['id']}} class="btn btn-success">View Details</a></td>
        </tr>
      </tbody>
      @endforeach
    </table>

  </div>
</div>

@endsection