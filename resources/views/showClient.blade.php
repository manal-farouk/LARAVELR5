<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Show {{ $client->clientName }}</title>
</head>
<body>
<div class="container" style="width: 600px  ">
    <p><img src="{{ asset('assets/images/' . $client->image)  }}" alt="" style="width:300px;height:400px;"></p>
    <h2><strong>Client_Name: </strong>{{ $client->clientName }}</h2>
    <hr>
    <h3><strong>Phone: </strong>{{ $client->phone }}</h3>
    <hr>
    <h3><strong>Email: </strong>{{ $client->email }}</h3>
    <hr>
    <h3><strong>City: </strong>{{ $client->City->city }}</h3>
    <hr>
    <h3><strong>Website: </strong>{{ $client->website }}</h3>
</body>
</html>
