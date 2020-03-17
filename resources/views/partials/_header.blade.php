<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="">
        <ul>
          <li class="{{ (Request::route()->getName() == 'home') ? 'active' : '' }}"><a href="{{route('home')}}">HOME</a></li>
          <li><a href="#">CORSO</a></li>
          <li class="{{ (Request::route()->getName() == 'students') ? 'active' : '' }}"><a href="{{route('students')}}">DOPO IL CORSO</a></li>
          <li><a href="#">LEZIONE GRATUITA</a></li>
          <li> <button type="button" name="button">CANDIDATI ORA</button> </li>
        </ul>
      </nav>
