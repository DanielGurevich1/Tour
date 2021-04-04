@foreach($programs as $program)
{{$program->title}} > {{$program->day1}} + {{$program->day2}}<br>

<a href="{{route('program.edit', [$program])}}">[edit]</a><br>
<form method="post" action="{{route('program.destroy', [$program])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

@endforeach
