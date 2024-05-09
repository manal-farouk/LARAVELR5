<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  
  @include('includes.nav')

<div class="container" style="margin-left: 20px ">

<h2>New Client</h2>

<form action="{{ route('insertClient') }}" method="post">
    @csrf
    <label for="clientName">Client Name</label><br>
    <input type="text" id="clientName" name="clientName" value="" class="form-control"> <br>
    <label for="phone">Phone</label><br>
    <input type="text" id="phone" name="phone" value="" class="form-control"><br>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" value="" class="form-control"><br>
    <label for="website">Wbsite</label><br>
    <input type="text" id="website" name="website" value="" class="form-control"><br><br>
    <input type="submit" value="submit">
</form> 

</body>
