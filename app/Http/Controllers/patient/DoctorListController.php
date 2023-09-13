<?php

namespace App\Http\Controllers\patient;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorListController extends Controller
{
    function show()
    {
        //dd(5);
        $results = DB::select("SELECT * FROM users WHERE role = 1");



        return view('patient.doctor-list', compact('results'));
        //dd($doctors);

        //return view("patient.doctor-list",$doctors);
    }


    function get_appintment(Request $req)
    {
        //dd($req);
        $patient_id = auth()->user()->id;
        $doctor_id = $req->id;
        //$date = strtotime($req->date);
        //$date = date("Y-m-d", strtotime($req->date));

        DB::insert("INSERT INTO appointments (doctor_id, patient_id,date,status) VALUES ($doctor_id,$patient_id,STR_TO_DATE('$req->date', '%Y-%m-%d'),1)");

        return view('patient.dashboard');
    }






    function doctor_profile()
    {
    }
}
