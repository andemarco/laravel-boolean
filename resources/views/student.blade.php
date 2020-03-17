@extends('layouts.layout')
@section('main')
  <div class="students">
    @foreach ((config('students.studentList')) as $student)
    <div class="students_box">
      <div class="students_box_up">
        <img src="{{$student['img']}}" alt="">
        <div class="">
          <h5>"{{$student['nome']}} ({{$student['eta']}} anni)</h5>
          <h6>Assunto da {{$student['azienda']}} come {{$student['lavoro']}}</h6>
        </div>
      </div>
      <p>{{$student['bio']}}</p>
    </div>
    @endforeach
  </div>
@endsection
