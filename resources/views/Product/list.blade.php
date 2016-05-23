@foreach ($products as $product)
    <p> {{ $product -> name }} </p>
     € {{ $product -> price }}
@endforeach