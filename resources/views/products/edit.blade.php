@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">

            <h1 style="padding: 20px;">Edit Product</h1>
            {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'PUT']) !!}
              <div class="form-group">

                <div style="padding: 20px;">
                  {{ Form::label('product_name', 'Product Name') }}
                  {{ Form::text('product_name', $product->product_name, ['class' => 'form-control', 'placeholder' => 'Product Name']) }}
                </div>

                <div style="padding: 20px;">
                  {{ Form::label('product_description', 'Product Description') }}
                  {{ Form::text('product_description', $product->product_description, ['class' => 'form-control', 'placeholder' => 'Product Description']) }}
                </div>

                <div style="padding: 20px;">
                  {{ Form::label('product_price', 'Product Price') }}
                  {{ Form::text('product_price', $product->product_price, ['class' => 'form-control', 'placeholder' => 'Product Price']) }}
                </div>

                {{ Form::hidden('_method', 'PUT') }}

                <div style="padding: 20px;">
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                </div>

              </div>
            {!! Form::close() !!}
            </div>
          </div>
      </div>
  </div>
@endsection