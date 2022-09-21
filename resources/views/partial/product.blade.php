

<ul>
    @if($loop->even)
    <div class="bg-primary">
    <li>{{$key}}</li>
    <li>{{$product['name']}}</li>
    <li>{{$product['color']}}</li>
    <li>{{$product['price']}}</li>
</div>
    <div class="bg-secondary">
    <li>{{$key}}</li>
    <li>{{$product['name']}}</li>
    <li>{{$product['color']}}</li>
    <li>{{$product['price']}}</li>
</div>
@endif
</ul>
