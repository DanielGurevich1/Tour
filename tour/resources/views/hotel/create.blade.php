<form method="POST" action="{{route('hotel.store')}}">
    Hotel name: <input type="text" name="hotel_name">
    Price: <input type="text" name="hotel_price">

    @csrf

    <button type="submit">ADD</button>
</form>
