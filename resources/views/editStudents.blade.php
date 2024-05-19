<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Edit student <title>
  </head>
<body>
  
  @include('includes.nav')

<div class="container" style="margin-left: 20px ">

<h2>Edit student</h2>

<form action="{{ route('updateStudents',$student->id) }}" method="post">
    @csrf
    @method('put')

    <label for="First_Name">Firs_Name</label><br>
    @error('first_Name')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="text" id="first_Name" name="first_name" value="{{$student->first_name}}" class="form-control"> <br>
    <label for="Last_Name">Last_Name</label><br>
    @error('last_name')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="text" id="last_name" name="last_name" value="{{$student->last_name}}" class="form-control"><br>
    <label for="Age">Age</label><br>
    @error('age')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="text" id="age" name="age" value="{{$student->age}}" class="form-control"><br>
   <input type="submit" value="submit">
</form> 

</body>