<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function login(Request $req){

        $results = DB::select("SELECT * FROM user Where email = '$req->email'");
        //dd($results[0]->password);
        if($results){
            if($results[0]->password == $req->password){
                if($results[0]->role == 2){
                    session(['user_id' => $results[0]->id]);
                    return view("patient.dashboard");
                }elseif($results[0]->role == 1){
                    session(['user_id' => $results[0]->id]);
                    return view("doctor.dashboard");
                }
                
            }else{
                echo 404;
            }
            
        }else{
            return 404;
        }
        //return $results;
    }
}
