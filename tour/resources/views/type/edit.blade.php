<form method="POST" action="{{route('type.update', [$type->id])}}">
    Name: <input type="text" name="type_name" value="{{$type->name}}">

    @csrf

    <button type="submit">Edit</button>
</form>
