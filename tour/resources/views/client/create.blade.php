<form method="POST" action="{{route('client.store')}}">
    Name: <input type="text" name="client_name">
    Surname: <input type="text" name="client_surname">

    <label for="client_phone">Enter your phone number:</label>
    <input type="text" name="client_phone">

    Email: <input type="email" name="client_email">
    @csrf
    Country: <input type="text" name="client_country">
    <button type="submit">ADD</button>
</form>

{{-- pattern="[0-9]{3}-[0-9]{2}-[0-9]{3} --}}
