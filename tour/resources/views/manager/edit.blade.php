@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client List</div>

                <div class="card-body">
                    <ul class="list-group ">
                        <form method="POST" action="{{route('manager.update', [$manager->id])}}" enctype="multipart/form-data">
                            Name: <input type="text" name="manager_name" value="{{$manager->name}}">
                            Surname: <input type="text" name="manager_surname" value="{{$manager->surname}}">

                            <select name="client_id">
                                @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
                                @endforeach
                            </select>

                            @csrf
                            <div class="form-group">
                                <label>Portret: </label>
                                <input type="file" class="form-control" name="manager_portret">
                                <img src="{{$manager->portret}}">
                            </div>
                            <button type="submit">Edit</button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
