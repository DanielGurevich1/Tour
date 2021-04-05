@foreach($prices as $price)
{{$price->price_offer_title}}<br>

<a href="{{route('price.edit', [$price])}}">[edit]</a><br>
<form method="post" action="{{route('price.destroy', [$price])}}">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

@endforeach
