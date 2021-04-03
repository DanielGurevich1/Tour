<form method="POST" action="{{route('manager.store')}}">
    Name: <input type="text" name="manager_name">
    Surname: <input type="text" name="manager_surname">

    <select name="client_id">
        @foreach ($clients as $client)
        <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
        @endforeach
    </select>

    @csrf

    <button type="submit">ADD</button>
</form>
