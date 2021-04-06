{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./resources/js/app.js"></script>
    /Applications/XAMPP/xamppfiles/htdocs/Tour/tour/resources/js/app.js
    <title>Document</title>
</head>
<body>

    @extends('resources.app.js') --}}

@foreach($clients as $client)
{{$client->name}} {{$client->surname}}<br>
<a href="{{route('client.edit', [$client])}}">[edit]</a><br>
<form method="post" action="{{route('client.destroy', [$client])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
{{-- <a href="{{route('client.destroy', [$client])}}">[delete]</a><br> --}}
@endforeach

{{-- <form method="POST" action="{{route('client.store')}}">
Name: <input type="text" name="client_name">
Surname: <input type="text" name="client_surname">

<label for="client_phone">Enter your phone number:</label>
<input type="text" name="client_phone">

Email: <input type="email" name="client_email">
@csrf
Country: <input type="text" name="client_country">
<button type="button">ADD</button>
{{-- </form> --}}
</body>
</html> --}}
