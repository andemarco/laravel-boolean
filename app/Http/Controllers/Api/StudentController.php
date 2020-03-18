<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function  getGenere(Request $request){

        $result = [
            'error' => '',
            'resonse' => []
        ];

        $data = $request->all();
        $students = config('students.studentList');
        var_dump($data['genere']);
    }

}
