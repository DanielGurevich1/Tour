@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create ManagerClients</div>

                <div class="card-body">

                    <ul class="list-group ">
                        <form method="POST" action="{{route('manager.store')}}">
                            <label for="client_phone">Enter a name</label>
                            <input type="text" name="manager_name" class="form-control">
                            <label for="client_phone">Enter a surname</label>
                            <input type="text" name="manager_surname" class="form-control">
                            <label for="client_phone">Choose client</label>
                            <select name="client_id" class="form-control">
                                @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
                                @endforeach
                            </select>

                            @csrf

                            <button type="submit" class="btn btn-success btn-sm">Create</button>
                        </form>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
