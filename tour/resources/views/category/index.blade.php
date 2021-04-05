@foreach($categories as $category)
{{$category->category}} <br>

<a href="{{route('category.edit', [$category])}}">[edit]</a><br>
<form method="post" action="{{route('category.destroy', [$category])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

@endforeach
