<form method="POST" action="{{route('manager.update', [$manager->id])}}">
    Name: <input type="text" name="manager_name" value="{{$manager->name}}">
    Surname: <input type="text" name="manager_surname" value="{{$manager->surname}}">

    <select name="client_id">
        @foreach ($client as $client)
        <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
        @endforeach
    </select>
    @csrf

    <button type="submit">Edit</button>
</form>
