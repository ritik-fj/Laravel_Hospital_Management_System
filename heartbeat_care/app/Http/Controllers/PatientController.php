<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
    
        $patients = Patient::all();
        return view('viewpatient', ['patients'=>$patients]);
    }


    public function show($id){

        $patients = Patient::find($id);

        return view ('patientdetails',['patients' => $patients]);
    }


    public function store() {
    
        $patients = new Patient();

        $patients ->firstName = request('firstName');
        $patients ->lastName = request('lastName');
        $patients ->dob = request('dob');
        $patients ->gender = request('gender');
        $patients ->email = request('email');
        $patients ->phoneNumber = request('phoneNumber');
        $patients ->allergies = request('allergies');
        $patients ->vaccines = request('vaccines');
        $patients ->prescriptions = request('prescriptions');
        $patients ->healthConditions = request('healthConditions');
        

        $patients->save();
        
        return redirect('/viewpatient');
    }

    public function edit($id){
        
        $patients = Patient::find($id);

        return view ('editpatient',['patients' => $patients]);

    } 

    public function update(Request $request,$id){
        
        $patients = Patient::find($id);
        $patients ->firstName = request('firstName');
        $patients ->lastName = request('lastName');
        $patients ->dob = request('dob');
        $patients ->gender = request('gender');
        $patients ->email = request('email');
        $patients ->phoneNumber = request('phoneNumber');
        $patients ->allergies = request('allergies');
        $patients ->vaccines = request('vaccines');
        $patients ->prescriptions = request('prescriptions');
        $patients ->healthConditions = request('healthConditions');
        
        $patients ->update();

        return redirect ('/viewpatient')->with('status',"Patient Details Updated Successfully");

    } 

}
