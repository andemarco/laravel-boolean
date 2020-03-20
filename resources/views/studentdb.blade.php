@extends('layouts.layout')
@section('main')
  <div class="filter">
      <select name="filter" id="options">
          <option value="All">All</option>
          <option value="f">f</option>
          <option value="m">m</option>
      </select>
  </div>
  <div class="students">
    @foreach ($students as $student)
    <div class="students_box">
      <div class="students_box_up">
        <img src="{{$student['img']}}" alt="">
        <div class="">
          <a href="{{route('show', ['slug' => $student['slug']])}}"> <h5>{{$student['nome']}} ({{$student['eta']}} anni)</h5></a>
          <h6>Assunt{{$student['genere'] == 'f' ? 'a' : 'o' }} da {{$student['azienda']}} come {{$student['lavoro']}}</h6>
        </div>
      </div>
      <p>{{$student['bio']}}</p>
    </div>
    @endforeach
  </div>
@endsection
