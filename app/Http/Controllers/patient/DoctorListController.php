<?php

namespace App\Http\Controllers\patient;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorListController extends Controller
{
    function show(){
        $results = DB::select("SELECT * FROM user WHERE role = 1");



        return view('patient.doctor-list', compact('results'));
        //dd($doctors);

        //return view("patient.doctor-list",$doctors);
    }


    function get_appintment($id){
        $patient_id = session('user_id');
        $doctor_id = $id;

        DB::insert("INSERT INTO appointments (doctor_id, patient_id,status) VALUES ($doctor_id,$patient_id,1)");

        return view('patient.dashboard');
    }

    function doctor_profile(){

    }
}
