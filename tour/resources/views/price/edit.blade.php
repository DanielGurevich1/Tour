<form method="POST" action="{{route('price.update',[$price->id])}}">
    Price offer title: <input type="text" name="price_offer_title" value="{{$price->price_offer_title}}">

    Car: <select name="car_id">
        @foreach ($cars as $car)
        <option value="{{$car->id}}">{{$car->name}} - {{$car->price}}</option>
        @endforeach
    </select>
    Guide: <select name="guide_id">
        @foreach ($guides as $guide)
        <option value="{{$guide->id}}">{{$guide->name}} - {{$guide->price}}</option>
        @endforeach
    </select>
    Hotel: <select name="hotel_id">
        @foreach ($hotels as $hotel)
        <option value="{{$hotel->id}}">{{$hotel->name}} - {{$hotel->price}}</option>
        @endforeach
    </select>
    Client: <select name="client_id">
        @foreach ($clients as $client)
        <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
        @endforeach
    </select>
    Manager: <select name="manager_id">
        @foreach ($managers as $manager)
        <option value="{{$manager->id}}">{{$manager->name}} {{$manager->surname}}</option>
        @endforeach
    </select>
    Program: <select name="program_id">
        @foreach ($programs as $program)
        <option value="{{$program->id}}">{{$program->title}}</option>
        @endforeach
    </select>
    @csrf


    @csrf

    <button type="submit">Edit</button>
</form>
