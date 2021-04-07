@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Clients</div>

                <div class="card-body">
                    <form method="POST" action="{{route('client.update', [$client->id])}}">
                        Name: <input type="text" name="client_name" value="{{$client->name}}">
                        Surname: <input type="text" name="client_surname" value="{{$client->surname}}">

                        <label for="client_phone">Enter your phone number:</label>
                        <input type="text" name="client_phone" value="{{$client->phone}}">

                        Email: <input type="email" name="client_email" value="{{$client->email}}">
                        @csrf
                        Country: <input type="text" name="client_country" value="{{$client->country}}">
                        @csrf

                        <button type="submit">Edit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
