@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Clients</div>

                <div class="card-body">
                    <form method="POST" action="{{route('car.store')}}">
                        Car name: <input type="text" name="car_name">
                        Price: <input type="text" name="car_price">

                        @csrf

                        <button type="submit">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
