@foreach($hotels as $hotel)
{{$hotel->name}} > {{$hotel->price}} <br>

<a href="{{route('hotel.edit', [$hotel])}}">[edit]</a><br>
<form method="post" action="{{route('hotel.destroy', [$hotel])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

@endforeach
