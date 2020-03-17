<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentListController extends Controller
{
  // FUNZIONE studenti
    public function getStudentList()
    {
      return view('student');
    }
  // FUNZIONE studente
    public function getStudent()
    {
      return view('show');
    }

}
