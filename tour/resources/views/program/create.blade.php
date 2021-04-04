<form method="POST" action="{{route('program.store')}}">
    Tour Title: <input type="text" name="tour_title">
    Day1: <input type="text" name="day_1">
    Day2: <input type="text" name="day_2">

    Manager: <select name="manager_id">
        @foreach ($managers as $manager)
        <option value="{{$manager->id}}">{{$manager->name}} {{$manager->surname}}</option>
        @endforeach
    </select>
    Client: <select name="client_id">
        @foreach ($clients as $client)
        <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
        @endforeach
    </select>

    @csrf

    <button type="submit">ADD</button>
</form>
