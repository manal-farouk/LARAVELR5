<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Trash</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

 @include('includes.navStudent')

<div class="container">
  <h2>Student Trash</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>First_name</th>
        <th>Last_name</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Trash</th>
</tr>
    </thead>
    <tbody>

    @foreach($students as $student)

      <tr>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->age}}</td>
        <td><a href="{{route('restoreStudent', $student->id) }}">Restore</a></td>
        <td><a href="showStudent/{{ $student->id }}">Show</a></td>
<form action="{{ route('forceDelete') }}" method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" value="{{ $student->id }}" name="id">
    <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete?')">
</form>
</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
