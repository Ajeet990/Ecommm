@extends('master')
@section('content')


@if(count($list) > 0)

<div class="container my-4">
    <h3>Products inside your Cart are:</h3>
    <div class="row">
        @foreach($list as $item)
        <div class="col-sm-4 my-2">
            <img class="img-thumbnail" src="{{$item->gallery}}" alt="">
        </div>
        <div class="col-sm-6 my-2">
            <p><b>Product name :</b> {{$item->name}}</p>
            <p><b>Detail :</b> {{$item->description}}</p>
            <p><b>Price :</b>Rs {{$item->price}}/-</p><br><br>

            <a href="d_product/{{$item->id}}"><button class="btn btn-warning">Remove from Cart</button></a><br><br>

        </div>
        <hr>
        @endforeach
        <div class="text-center">
            
                <a href="order" class="btn btn-success">Buy Now</a><br><br>

                <a href="/"><button class="btn btn-primary bb">Back to shop</button></a>
            
        </div>
    </div>
</div>

@else
<div class="container my-4">
<div class="alert alert-warning " role="alert">
  No items in your cartList. Please add some item in your cart to buy.
</div>
</div>

@endif
@endsection