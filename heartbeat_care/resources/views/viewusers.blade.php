@extends('layouts.app')
@section('title') {{'View Patient'}} @endsection
@section('content')


<div class="container">
  <div class="row justify-content-center">
    <h3>Hospital Staff</h3>
    <hr>
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date of Birth</th>
          <th>Gender</th>
          <th>Department</th>
          <th>Position</th>
        </tr>
      </thead>
      @foreach($users as $user)
      <tbody class="table-light">
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->dob }}</td>
          <td>{{ $user->gender }}</td>
          <td>{{ $user->department }}</td>
          <td>{{ $user->position }}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</div>

@endsection