<form method="POST" action="{{route('type.store')}}">
    Name: <input type="text" name="type_name">

    @csrf

    <button type="submit">ADD</button>
</form>
