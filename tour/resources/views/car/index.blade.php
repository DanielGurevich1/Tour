@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Clients</div>

                <div class="card-body">
                    @foreach($cars as $car)
                    {{$car->name}} > {{$car->price}}

                    <a href="{{route('car.edit', [$car])}}" class="btn btn-info btn-sm">Edit</a><br>
                    <form method="post" action="{{route('car.destroy', [$car])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
