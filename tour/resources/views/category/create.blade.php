<form method="POST" action="{{route('category.store')}}">
    category name: <input type="text" name="category_name">

    @csrf

    <button type="submit">ADD</button>
</form>
