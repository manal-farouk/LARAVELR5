<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Edit Client <title>
  </head>
<body>
  
  @include('includes.nav')

  <div class="container" style="width: 600px  ">

<h2>Edit Client</h2>

<form action="{{ route('updateClients',$client->id) }}" method="post">
    @csrf
    @method('put')

    <label for="clientName">Client Name</label><br>
    
    @error('clientName')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="text" id="clientName" name="clientName" value="{{$client->clientName}}" class="form-control"> <br>
    <label for="phone">Phone</label><br>
    
    @error('phone')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="text" id="phone" name="phone" value="{{$client->phone}}" class="form-control"><br>
    <label for="email">Email</label><br>
    
    @error('email')
    <p style="color:red">{{ $message }} </p>
    @enderror
    <input type="email" id="email" name="email" value="{{$client->email}}" class="form-control"><br>
    <label for="website">Wbsite</label><br>
    
    @error('website')
    <p style="color:red">{{ $message }} </p>
    @enderror
    
    <input type="text" id="website" name="website" value="{{$client->website}}" class="form-control"><br><br>
    
    <label for="city">City:</label><br>
    <p style="color: red">
      @error('city')
        {{ $message }}
      @enderror
    </p>
    <select name="city" id="City" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo" {{ old('city', $client->city) === 'Cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza" {{ old('city', $client->city) === 'Giza' ? 'selected' : '' }}>Giza</option>
      <option value="Alex" {{ old('city', $client->city) === 'Alex' ? 'selected' : '' }}>Alex</option>
    </select>
    <br><br>
    <label for="active">Active:</label><br>
<input type="checkbox" id="active" name="active"  value="{{$client->active}}"  class="" {{ old('active') ? 'checked' : '' }}><br><br>

<p><img src="{{ asset('assets/images/' . $client->image) }}" alt="Client Image" style="width:300px;height:400px;"></p>
<label for="image">Image:</label><br>
@error('image')
        {{ $message }}
      @enderror
<input type="file" id="image" name="image" accept="image/*" class="form-control"><br><br>


    <input type="submit" value="Submit">
  </form> 
</div>

</body>
</html>