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






    function p_report()
    {
        $patient_id = auth()->user()->id;
        $results = DB::select("SELECT * FROM appointments WHERE patient_id = $patient_id and status in( 2,3) order by ID DESC");
        $doctors  = DB::select("SELECT * FROM users");
        $doctor_name = array();
        foreach ($doctors as $row) {
            $doctor_name[$row->id] = $row->name;
        }
        return view('patient.report', compact('results', 'doctor_name'));
    }
}
