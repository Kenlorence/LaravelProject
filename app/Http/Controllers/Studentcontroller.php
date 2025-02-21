<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Studentcontroller extends Controller
{
  public function index() {
    $data = Student::all(); // Fetch all students from the database
    return view('students.index', ['students' => $data]);
}

}
