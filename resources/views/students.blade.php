<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

 @include('includes.navStudent')

<div class="container">
  <h2>Student Data</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>First_name</th>
        <th>Last_name</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>
</tr>
    </thead>
    <tbody>

    @foreach($students as $student)

      <tr>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->age}}</td>
        <td><a href="editStudents/{{ $student->id }}">Edit</a></td>
        <td><a href="showStudent/{{ $student->id }}">Show</a></td>

        <td>

            <!-- In your Blade view -->
{{--@foreach($students as $student)
<h2>{{ $student->first_name }} {{ $student->last_name }}</h2> --}}
{{-- //<ul>
    {{-- @foreach($student->courses as $course)
        <li>{{ $course->course_id }}</li>
    @endforeach
</ul>
@endforeach --}}

{{-- @foreach($students as $student)
    <h2>{{ $student->first_name }} {{ $student->last_name }}</h2>
    <p>Last Course: {{ $student->courses->latest->name }}</p>
@endforeach --}}


        <form action="{{ route('delStudent') }}" method="post">
 @csrf
 @method('DELETE')
<input type="hidden" value="{{ $student->id }}" name="id" >
<input type="submit" value="delete" onclick="return confirm('Are you sure you want to delete?')">
</form>
</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
