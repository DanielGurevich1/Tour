@foreach($tours as $tour)
{{$tour->name}} - {{$tour->length}} days

<a href="{{route('tour.edit', [$tour])}}">[edit]</a><br>
<form method="post" action="{{route('tour.destroy', [$tour])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

@endforeach
