@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clients</div>

                <div class="card-body">

                    <ul class="list-group ">
                        <form method="POST" action="{{route('client.store')}}">

                            <label>Enter a name</label>
                            <input type="text" name="client_name" class="form-control" pattern="[a-zA-Z]{1,}" value="{{old('client_name')}}" validate>

                            <label>Enter a surname</label>
                            <input type="text" name="client_surname" class="form-control" value="{{old('client_surname')}}">
                            <div>
                                <label>Enter a phone number</label>
                                <input type="text" name="client_phone" class="form-control" pattern="[0-9]{11}" value="{{old('client_phone')}}">
                                <label>format 3706xx xxx xx</label>
                            </div>
                            <label>Enter an email</label>
                            <input type="email" name="client_email" class="form-control" value="{{old('client_email')}}">

                            <label>Enter a country</label>
                            Country: <input type="text" name="client_country" class="form-control" pattern="[a-zA-Z]{1,}" value="{{old('client_country')}}">
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


{{-- pattern="[0-9]{3}-[0-9]{2}-[0-9]{3} --}}
