@foreach($managers as $manager)
{{$manager->name}} {{$manager->surname}}<br>
<a href="{{route('manager.edit', [$manager])}}">[edit]</a><br>
<form method="post" action="{{route('manager.destroy', [$manager])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
{{-- <a href="{{route('manager.destroy', [$manager])}}">[delete]</a><br> --}}
@endforeach
