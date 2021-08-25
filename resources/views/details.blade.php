


@extends('master')
@section('content')

<div class="container my-4">
    <div class="row">
        
        <div class="col-sm-4 ">
            <img class="img-thumbnail" src="{{$detail['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
                <p><b>Product name :</b> {{$detail['name']}}</p>
                <p ><b>Detail :</b> {{$detail['description']}}</p>
                <p><b>Price :</b>Rs {{$detail['price']}}/-</p><br><br>
                <form action="/add_to_cart" method="POST">
                @csrf
                    <input type="hidden" name="product_id" value="{{$detail['id']}}">
                    <button class="btn btn-success" type="submit" >Add to Cart</button><br><br>
            </form>
                <button class="btn btn-primary" >Buy Now</button><br><br>
            <a href="/">Go back</a>   
        </div>
    </div>
</div>
@endsection