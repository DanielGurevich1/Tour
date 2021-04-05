<form method="POST" action="{{route('tour.store')}}">
    Tour name: <input type="text" name="tour_name">

    Client: <select name="client_id">
        @foreach ($clients as $client)
        <option value="{{$client->id}}">{{$client->name}} {{$client->surname}}</option>
        @endforeach
    </select>

    Type: <select name="type_id">
        @foreach ($types as $type)
        <option value="{{$type->id}}">{{$type->type}}</option>
        @endforeach
    </select>

    Tour length: <input type="text" name="tour_length">

    Price: <select name="price_id">
        @foreach ($prices as $price)
        <option value="{{$price->id}}">{{$price->price_offer_title}}</option>
        @endforeach
    </select>
    Guide: <select name="guide_id">
        @foreach ($guides as $guide)
        <option value="{{$guide->id}}">{{$guide->name}} - {{$guide->price}}</option>
        @endforeach
    </select>

    @csrf

    <button type="submit">ADD</button>
</form>
