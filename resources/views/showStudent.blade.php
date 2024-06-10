<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show {{ $student->studentName }}</title>
</head>
<body>
    <h2><strong>First_Name: </strong>{{ $student->first_name }}</h2>
    <hr>
    <h3><strong>Last_Name: </strong>{{ $student->last_name }}</h3>
    <hr>
    <h3><strong>Age: </strong>{{ $student->age }}</h3>

</body>
</html>
