<?php

namespace App\Http\Controllers\doctor;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    function show(){
        $results = DB::select("SELECT * FROM users WHERE role = 2");



        return view('doctor.patient-list', compact('results'));
    }



    function appointments(){
        //dd(5);
        $doctor_id = auth()->user()->id;
        //dd($patient_id);
        $results = DB::select("SELECT * FROM appointments WHERE doctor_id = $doctor_id");
        $user_table = DB::select("SELECT * FROM users");
        //dd($results);
        $patient_name = Array();
        foreach($user_table as $row){
            $patient_name[$row->id]=$row->name;
        }

        return view('doctor.appointment-list', compact('results','patient_name'));

    }


    function confirm($id){
        $results = DB::select("UPDATE appointments
        SET STATUS = 2 WHERE ID = $id");
        // return redirect()->back();
        return redirect()->back()->with('message', 'Your action was successful!');
    }
    function cancel($id){
        $results = DB::select("UPDATE appointments
        SET STATUS = 4 WHERE ID = $id");
        return redirect()->back();
    }
    function visited($id){
        $results = DB::select("UPDATE appointments
        SET STATUS = 3 WHERE ID = $id");
        return redirect()->back();
    }
}
