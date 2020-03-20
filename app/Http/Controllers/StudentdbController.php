<?php

namespace App\Http\Controllers;
use App\Student;

class StudentdbController extends Controller
{
  public function index()
  {
    $this->students = Student::all();
    dd($this->students);
  }
}
