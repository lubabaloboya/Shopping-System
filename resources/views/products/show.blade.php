@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">

              <div style="padding: 20px;">
                  <a href="/products" class="btn btn-success" >Go Back</a>
              </div>
                
              <div style="padding: 20px;">
                <h3>{{ $product->product_name }} - Price is {{ $product->product_price }} </h3> 
                <hr>
                <h5> Created at:  {{ $product->created_at }} </h5>
              </div>
              
              <div style="padding: 20px">
                  <span style="float:right padding-left: 10px;"><a href="/products/{{ $product->id }}/edit" class="btn btn-primary">Edit</a></span>

                  <span style="float:right">
                      {!!Form::open(['action'=>['ProductsController@destroy', $product->id] ,'method' =>'POST' ,'class'=>'pull-right'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                  </span>
              </div>  
              {!!Form::close()!!}
            </div>
          </div>
      </div>
  </div>
@endsection