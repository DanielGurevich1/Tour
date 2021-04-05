<form method="POST" action="{{route('manager.update', [$manager->id])}}">


    Name: <input type="text" name="guide_name" value="{{$guide->name}}>
    Surname: <input type=" text" name="guide_surname" value="{{$guide->surname}}>
    Phone: <input type=" text" name="guide_Phone" value="{{$guide->phone}}>
    Email: <input type=" text" name="guide_Email" value="{{$guide->email}}>

    <select name=" category_id">
    @foreach ($categories as $category)
    <option value="{{$category->id}}">{{$category->category}} </option>
    @endforeach
    </select>

    @csrf
    <button type="submit">Edit</button>
</form>
