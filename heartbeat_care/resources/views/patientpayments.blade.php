@extends('layouts.app')
@section('title') {{'Edit Patient'}} @endsection
@section('content')

<div class="container">

  <h3>Payment Records</h3>
  <hr>
  <table class="table table-bordered ">
    <thead class="table-dark">
      <tr>
        <th>Payment ID</th>
        <th>Total Fee</th>
        <th>Amount Paid</th>
        <th>Payment Method</th>
        <th>Date Issued</th>

      </tr>
    </thead>
    @foreach($payments as $payment)
    <tbody class="table-light">
      <tr>
        <td>{{ $payment->id }}</td>
        <td>{{ $payment->totalFee }}</td>
        <td>{{ $payment->amountPaid }}</td>
        <td>{{ $payment->paymentMethod }}</td>
        <td>{{ $payment->created_at }}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

@endsection