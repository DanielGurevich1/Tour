@foreach($cars as $car)
{{$car->name}} > {{$car->price}} <br>

<a href="{{route('car.edit', [$car])}}">[edit]</a><br>
<form method="post" action="{{route('car.destroy', [$car])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

@endforeach
