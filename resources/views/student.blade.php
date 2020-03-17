@extends('layouts.layout')
@section('main')
  <div class="students">
    @foreach ((config('students.studentList')) as $student)
    <div class="students_box">
      <div class="students_box_up">
        <img src="{{$student['img']}}" alt="">
        <div class="">
          <a href=""> <h5>{{$student['nome']}} ({{$student['eta']}} anni)</h5></a>
          <h6>Assunt{{$student['genere'] == 'f' ? 'a' : 'o' }} da {{$student['azienda']}} come {{$student['lavoro']}}</h6>
        </div>
      </div>
      <p>{{$student['bio']}}</p>
    </div>
    @endforeach
  </div>
@endsection
