@foreach($clients as $client)
{{$client->name}} {{$client->surname}}<br>
<a href="{{route('client.edit', [$client])}}">[edit]</a><br>
<form method="post" action="{{route('client.destroy', [$client])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
{{-- <a href="{{route('client.destroy', [$client])}}">[delete]</a><br> --}}
@endforeach
