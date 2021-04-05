<form method="POST" action="{{route('category.update',[$category->id])}}">
    Category name: <input type="text" name="category_name" value="{{$category->category}}">


    @csrf

    <button type="submit">Edit</button>
</form>
