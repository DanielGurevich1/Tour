<form method="POST" action="{{route('program.update',[$program->id])}}">
    Tour Title: <input type="text" name="tour_title" value="{{$program->title}}">
    Day1: <input type="text" name="day_1" value="{{$program->day1}}">
    Day2: <input type="text" name="day_2" value="{{$program->day2}}">

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

    <button type="submit">Edit</button>
</form>
