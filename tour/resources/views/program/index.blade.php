@foreach($programs as $program)
Tour program: {{$program->title}} > {{$program->day1}}
About: <textarea name="about_d1">{{$program->about_d1}}"</textarea>
{{$program->day2}}<br>About: <textarea name="about_d2">{{$program->about_d2}}"</textarea>
Manager: {{$program->programManager->name}}
{{$program->programManager->surname}}<br>
Client: {{$program->programClient->name}}
{{$program->programClient->surname}}


<a href="{{route('program.edit', [$program])}}">[edit]</a><br>
<a href="{{route('program.pdf', [$program])}}">[pdf]</a><br>
<form method="post" action="{{route('program.destroy', [$program])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>

</form>


@endforeach
