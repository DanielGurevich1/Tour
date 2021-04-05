<form method="POST" action="{{route('car.store')}}">
    Car name: <input type="text" name="car_name">
    Price: <input type="text" name="car_price">

    @csrf

    <button type="submit">ADD</button>
</form>
