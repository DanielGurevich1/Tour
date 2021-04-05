<form method="POST" action="{{route('hotel.update',[$hotel->id])}}">
    Hotel name: <input type="text" name="hotel_name" value="{{$hotel->name}}">
    Price: <input type="text" name="hotel_price" value="{{$hotel->price}}">

    @csrf

    <button type="submit">Edit</button>
</form>
