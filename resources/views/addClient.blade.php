<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  
  @include('includes.nav')

<div class="container" style="width: 600px  ">

<h2>New Client</h2>

<form action="{{ route('insertClient') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <label for="clientName">Client Name</label><br>
    @error('clientName')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="text" id="clientName" name="clientName" value="{{old('clientName') }}" class="form-control"> <br>
    
    <label for="phone">Phone</label><br>
    @error('phone')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control"><br>
    
    <label for="email">Email</label><br>
    @error('email')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="email" id="email" name="email" value="{{old('email') }}" class="form-control"><br>
    
    <label for="website">Website</label><br>
    @error('website')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="text" id="website" name="website" value="{{old('website') }}" class="form-control"><br>

    <label for="city">City</label><br>
    @error('city')
    <p style="color:red">{{ $message }} </p>
    @enderror
      <select name="city" id ="City" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo"{{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza" {{ old('city') == 'Giza'  ? 'selected' : '' }}>Giza</option>
      <option value="Alex" {{ old('city') == 'Alex'  ? 'selected' : '' }}>Alex</option>
      </select>

      <input type="checkbox" id="active" name="active" value="{{old('active') }}">
      <label for="active">Active</label>
<br><br>
    <label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control"><br><br>
    <input type="submit" value="submit">
</form> 

</body>
