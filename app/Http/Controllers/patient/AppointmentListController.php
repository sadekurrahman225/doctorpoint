<?php

namespace App\Http\Controllers\patient;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentListController extends Controller
{
    function show(){
        $patient_id = session('user_id');
        $results = DB::select("SELECT * FROM appointments WHERE patient_id = $patient_id");
        $user_table = DB::select("SELECT * FROM user");

        $doctor_name = Array();
        foreach($user_table as $row){
            $doctor_name[$row->id]=$row->name;
        }

        return view('patient.appointment-list', compact('results','doctor_name'));

    }
}
