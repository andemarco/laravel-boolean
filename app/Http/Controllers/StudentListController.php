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
    public function getStudent($slug)
    {
      foreach ((config('students.studentList')) as $student) {
          if ($student['slug'] == $slug) {
            return view('show', ['student' => $student]);
        }
      }
      return 'ERROR 404';
    }
}
