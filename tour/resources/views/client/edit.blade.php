@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Clients</div>

                <div class="card-body">
                    <ul class="list-group ">
                        <form method="POST" action="{{route('client.update', [$client->id])}}">

                            <label for="client_phone">Enter a name</label>
                            Name: <input type="text" name="client_name" value="{{$client->name}}" class="form-control" value="{{old('client_name', $client->name)}}">

                            <label for="client_phone">Enter a surname</label>
                            Surname: <input type="text" name="client_surname" value="{{$client->surname}}" class="form-control" value="{{old('client_surname', $client->surname)}}">

                            <label for="client_phone">Enter a phone number</label>
                            <input type="text" name="client_phone" value="{{$client->phone}}" class="form-control" value="{{old('client_phone', $client->phone)}}">

                            <label for="client_phone">Enter an email</label>
                            Email: <input type="email" name="client_email" value="{{$client->email}}" class="form-control" value="{{old('client_email', $client->email)}}">

                            <label for="client_phone">Enter a country</label>
                            Country: <input type="text" name="client_country" value="{{$client->country}}" class="form-control" value="{{old('client_country', $client->country)}}">
                            @csrf

                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>

                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
