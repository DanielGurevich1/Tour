@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client List</div>

                <div class="card-body">
                    <ul class="list-group ">
                        @foreach($clients as $client)

                        <li class="list-group-item list-line">
                            <div>
                                {{$client->name}} {{$client->surname}}
                            </div>
                            <div class="list-line__buttons">
                                <a href="{{route('client.edit', [$client])}}" class="btn btn-info btn-sm">Edit</a>

                                <form method="post" action="{{route('client.destroy', [$client])}}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </li>




                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
