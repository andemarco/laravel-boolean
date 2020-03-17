<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentListController extends Controller
{
  // FUNZIONE HOMEPAGE
    public function getStudentList()
    {
      return view('student');
    }
}
