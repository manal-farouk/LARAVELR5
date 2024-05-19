<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  
  @include('includes.navStudent')

<div class="container" style="margin-left: 20px ">

<h2>New Student</h2>

<form action="{{ route('insertStudent') }}" method="post">
    @csrf
    <label for="first_name">First name:</label><br>
    @error('first_name')
    <p style="color:red">{{ $message }} </p>
    @enderror
  <input type="text" id="first_name" name="first_name" value="" class="form-control"><br>
  <label for="last_name">Last name:</label><br>
  @error('last_name')
    <p style="color:red">{{ $message }} </p>
    @enderror
  <input type="text" id="last_name" name="last_name" value="" class="form-control"><br>
  <label for="age">age</label><br>
  @error('clientName')
    <p style="age">{{ $message }} </p>
    @enderror
  <input type="text" id="age" name="age" value="" class="form-control"><br>
  <input type="submit" value="submit">
</form> 

</body>
</html>