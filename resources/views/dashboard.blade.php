@extends('layouts.sidebarlayout')

<head>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>

@section('title', 'Dashboard')

<style>
    .set-button {
        background-color: #a6abb1;
        border: none;
        color: black;
        padding: 50px 50px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 20px;
        margin-left: 20px;
        cursor: pointer;
    }
</style>

@section('sidebar')
 
 
@section('content')
    <p>Welcome to the Dashboard!</p>
    <br>
    <p>Questionnaires:</p>
    <br> 
    <button type="button" onclick="openForm()" class="set-button">Add Set</button>
    <br>
    {{ $save = '' }}
    @foreach ($question_sets as $row)
        <form action="displaySet" method="POST">
            @csrf
            <input type="text" value="{{ $row->set_name }}" name="set_name" hidden>
            <button type="submit" class="set-button">{{ $row->set_name }}</button>
        </form> <br>
    @endforeach

@stop

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="form-popup" id="myForm">
  <form action="createSet" class="form-container" method="POST">
    @csrf
    <h2>What is the name of the set?</h2>
    <input type="text" name="set_name" required>
    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


<!-- Script to show/hide the pop-up -->
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>