@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Manager </div>

                <div class="card-body">
                    <ul class="list-group ">
                        <form method="POST" action="{{route('manager.update', [$manager->id])}}" enctype="multipart/form-data">
                            <label for="client_phone">Enter a name</label>
                            <input type="text" name="manager_name" value="{{$manager->name}}" class="form-control">
                            <label for="client_phone">Enter a surname</label>
                            <input type="text" name="manager_surname" value="{{$manager->surname}}" class="form-control">

                            <label for="client_phone">Choose client</label>
                            <select name="client_id" class="form-control">
                                @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
                                @endforeach
                            </select>

                            @csrf
                            <div class="form-group" class="form-control">
                                <label>Portret: </label>
                                <input type="file" class="form-control" name="manager_portret">
                                <img src="{{$manager->portret}}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                        </form>
                    </ul>
                </div>

                {{-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$manager->portret}}" alt="Card image cap">
                <div class="card-body">
                    <form method="POST" action="{{route('manager.update', [$manager->id])}}" enctype="multipart/form-data">
                        Name: <input type="text" name="manager_name" value="{{$manager->name}}" class="form-control">
                        Surname: <input type="text" name="manager_surname" value="{{$manager->surname}}" class="form-control">

                        Client Name: <select name="client_id" class="form-control">
                            @foreach ($clients as $client)
                            <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
                            @endforeach
                        </select>

                        @csrf
                        <div class="form-group" class="form-control">
                            <label>Portret: </label>
                            <input type="file" class="form-control" name="manager_portret">
                            <img src="{{$manager->portret}}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                    </form>
                    {{-- <h5 class="card-title" name="manager_name">{{$manager->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    {{-- </div>
            </div> --}}
                </div>
            </div>
        </div>
    </div>
    @endsection
