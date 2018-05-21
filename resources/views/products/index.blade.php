@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <h1 style="padding: 20px">Products list</h1>
            @if(count($products) > 0)
              @foreach($products as $product)
                <div style="padding: 20px">
                  <a href="/products/{{ $product->id }} "> {{ $product->product_name}} </a>
                </div>
              @endforeach
            @else 
              <div>No products found</div>
            @endif
          </div>
        </div>
    </div>
</div>
@endsection