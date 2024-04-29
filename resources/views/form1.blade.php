<!DOCTYPE html>
<html>
<body>

<h2>User Form</h2>

<form action="{{ route('saveUserData') }}" method="POST">
    @csrf
  <label for="first_name">First name:</label><br>
  <input type="text" id="first_name" name="first_name" value="first_name"><br>
  <label for="last_name">Last name:</label><br>
  <input type="text" id="last_name" name="last_name" value="last_name"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>


