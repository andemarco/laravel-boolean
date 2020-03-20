<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;

class StudentdbListController extends Controller
{
  private $students;
  public function __construct()
  {
    $this->students = Student::all();
      // dd($this->students);
  }

  public function getStudentdbList()
  {
    $students = $this->students;
    return view('studentdb');
  }


}
