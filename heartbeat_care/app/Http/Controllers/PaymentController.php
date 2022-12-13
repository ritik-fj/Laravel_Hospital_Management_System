<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function index() {
    
        $payments = Payment::all();
        return view('patientpayments', ['payments'=>$payments]);
    }

    public function store(){
        $payments = new Payment();
        $payments->patientId = request('patientId');
        $payments->totalFee = request('totalFee');
        $payments->amountPaid = request('amountPaid');
        $payments->paymentMethod = request('paymentMethod');


        $payments->save();
        return redirect('/');
    }

    /*public function store() {
    
        $payments = new Payment();

        $payments ->patientId = request('firstName');
        $payments ->totalFee = request('lastName');
        $payments ->amountPaid = request('dob');

        $payments->save();
        
        return redirect('/');
    }
*/
    
    public function show($patientId){


        $payments = Payment::where('patientId','=',$patientId)->get();

        return view ('patientpayments',['payments' => $payments]);
    }

}
