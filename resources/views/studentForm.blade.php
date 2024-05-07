<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> New Student </title>
</head>
<body>

<h2>New Student</h2>

<form action="{{ route('receivestudentForm') }}" method="post">
    @csrf
    <label for="first_name">First name:</label><br>
  <input type="text" id="first_name" name="first_name" value=""><br>
  <label for="last_name">Last name:</label><br>
  <input type="text" id="last_name" name="last_name" value=""><br><br>
  <label for="age">age</label><br>
  <input type="text" id="age" name="age" value=""><br>
  <input type="submit" value="submit">
</form> 

</body>
</html>