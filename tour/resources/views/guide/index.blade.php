@foreach($guides as $guide)
{{$guide->name}} {{$guide->surname}}<br>
<a href="{{route('guide.edit', [$guide])}}">[edit]</a><br>
<form method="post" action="{{route('guide.destroy', [$guide])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
{{-- <a href="{{route('guide.destroy', [$guide])}}">[delete]</a><br> --}}
@endforeach
