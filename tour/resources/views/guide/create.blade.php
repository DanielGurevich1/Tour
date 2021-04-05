<form method="POST" action="{{route('guide.store')}}">
    Name: <input type="text" name="guide_name">
    Surname: <input type="text" name="guide_surname">
    Phone: <input type="text" name="guide_phone">
    Email: <input type="text" name="guide_email">

    <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->category}} </option>
        @endforeach
    </select>

    @csrf

    <button type="submit">ADD</button>
</form>
