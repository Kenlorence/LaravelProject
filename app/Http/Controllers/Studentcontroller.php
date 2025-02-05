<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Studentcontroller extends Controller
{
    public function index(){
      //  $data = Student::where('age','=', 21)->orderby('first_name','desc')->limit(5)->get();
        //dd($data);
        $data = DB::table('students')
        -> select(DB::raw('count(*) as gender_count, gender'))
        ->groupby('gender')
        ->get();
        return view('students.index', ['students'=> $data]);
    }
}
