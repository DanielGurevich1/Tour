@foreach($types as $type)
{{$type->type}} <br>
<a href="{{route('type.edit', [$type])}}">[edit]</a><br>
<form method="post" action="{{route('type.destroy', [$type])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

@endforeach
