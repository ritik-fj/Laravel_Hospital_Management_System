@extends('layouts.app')


@section('title') {{'New Patient'}} @endsection
@section('content')



<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Add New Payment') }}</div>

        <div class="card-body">

          <form action="/addpayment" method="POST">
            @csrf
            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="patientId">Patient ID:</span>
              <input type="text" class="form-control" id="patientId" value="{{ request()->patientId }}" name="patientId">
            </div>
            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="totalFee">Total Fee:</span>
              <input type="text" class="form-control" id="totalFee" name="totalFee">
            </div>
            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="amountPaid">Amount Paid:</span>
              <input type="text" class="form-control" id="amountPaid" name="amountPaid">
            </div>
            <div class="form-group input-group mb-3">
              <span class="input-group-text" for="paymentMethod">Payment Method:</span>
              <input type="text" class="form-control" id="paymentMethod" name="paymentMethod">
            </div>

            <div class="form-group text-center mb-3">
              <button type="submit" class="btn btn-primary me-1 btn-lg ">Save</button>
              <a href="{{ url()->previous() }}" class="btn btn-secondary btn-lg" tabindex="-1" role="button">Cancel</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>


@endsection