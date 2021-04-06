@foreach($managers as $manager)
Manager: {{$manager->name}} {{$manager->surname}} || Client: {{$manager->clientManager->name}} {{$manager->clientManager->surname}}<br>
<a href="{{route('manager.edit', [$manager])}}">[edit]</a><br>
<form method="post" action="{{route('manager.destroy', [$manager])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

@endforeach
