@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client List</div>

                <div class="form-check">
                    <form action="{{route('client.index')}}" method="get" class="form-check">
                        <div class="form-group form-check-inline list-line">
                            <label class="form-check">Sort by name:</label>

                            <label class="form-check-label" for="sortASC">ASC</label>
                            <input type="radio" class="form-check-input" name="sort" value="asc" id="sortASC" @if($sortBy=='asc' ) checked @endif>

                            DSC <input type="radio" class="form-check-input" name="sort" value="desc" id="sortDESC" @if($sortBy=='desc' ) checked @endif>

                            <div class="list-line__buttons">
                                <button type="submit" class="btn btn-info btn-sm">Sort</button>
                                <a href="{{route('client.index')}}" class="btn btn-info btn-sm">Clear sort</a>

                            </div>
                    </form>
                </div>
            </div>

            <div class="card-body">
                <ul class="list-group ">
                    @foreach($clients as $client)

                    <li class="list-group-item list-line">
                        <img src="{{$client->portret}}">
                        <div>
                            {{$client->name}} {{$client->surname}}
                        </div>
                        <div class="list-line__buttons">
                            <a href="{{route('client.edit', [$client])}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{route('client.pdf', [$client])}}" class="btn btn-danger btn-sm">pdf</a><br>
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
