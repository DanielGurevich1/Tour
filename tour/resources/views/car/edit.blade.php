<form method="POST" action="{{route('car.update',[$car->id])}}">
    Car name: <input type="text" name="car_name" value="{{$car->name}}">
    Price: <input type="text" name="car_price" value="{{$car->price}}">

    @csrf

    <button type="submit">Edit</button>
</form>
