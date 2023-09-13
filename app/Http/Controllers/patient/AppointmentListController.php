<?php

namespace App\Http\Controllers\patient;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentListController extends Controller
{
    function show()
    {
        //dd(5);
        $patient_id = auth()->user()->id;
        //dd($patient_id);
        $results = DB::select("SELECT * FROM appointments WHERE patient_id = $patient_id order by ID DESC");
        $user_table = DB::select("SELECT * FROM users");

        $doctor_name = array();
        foreach ($user_table as $row) {
            $doctor_name[$row->id] = $row->name;
        }

        return view('patient.appointment-list', compact('results', 'doctor_name'));
    }
}
