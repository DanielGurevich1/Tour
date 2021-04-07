@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Program List</div>

                <div class="card-body">

                    <ul class="list-group ">
                        @foreach($programs as $program)
                        <li class="list-group-item">
                            <label>Program title</label>
                            {{$program->title}} > {{$program->day1}}
                        </li>
                        <li class="list-group-item">

                            <label>Program day 1</label>
                            <textarea name="about_d1">{{$program->about_d1}}"</textarea>
                        </li>
                        <label>Program day 2</label>
                        {{$program->day2}}<br>About: <textarea name="about_d2">{{$program->about_d2}}"</textarea>
                        <label>Program Manager</label>
                        {{$program->programManager->name}}
                        {{$program->programManager->surname}}<br>
                        <label>Program Client</label>
                        {{$program->programClient->name}}
                        {{$program->programClient->surname}}


                        <a href="{{route('program.edit', [$program])}}">[edit]</a><br>
                        <a href="{{route('program.pdf', [$program])}}">[pdf]</a><br>
                        <form method="post" action="{{route('program.destroy', [$program])}}">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                        </form>


                        @endforeach


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
