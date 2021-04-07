@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Program</div>

                <div class="card-body">

                    <ul class="list-group ">
                        <form method="POST" action="{{route('program.store')}}">
                            <label>Enter program title</label>
                            <input type="text" name="tour_title" class="form-control">
                            <label>Enter day 1 title</label>
                            <input type="text" name="day_1" class="form-control">

                            <label>Enter about description</label>
                            <textarea name="about_d1" id="summernote"></textarea>
                            {{-- {{$program->about_d1}} --}}
                            <label>Enter day 2 title</label>
                            <input type="text" name="day_2" class="form-control">

                            <label>Enter day 2 description</label>
                            <textarea name="about_d2" id="summernote"></textarea>
                            {{-- {{$program->about_d2}} --}}

                            <label>Select Manager</label>
                            <select name="manager_id">
                                @foreach ($managers as $manager)
                                <option value="{{$manager->id}}">{{$manager->name}} {{$manager->surname}}</option>
                                @endforeach
                            </select>
                            <label for="client_phone">Select Manager</label>
                            <select name="client_id">
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
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });

</script>

{{-- <script>
    window.addEventListener('DOMContentLoaded', (event) => {
        $('#summernote').summernote();
    });

</script> --}}
@endsection
