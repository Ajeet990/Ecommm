@extends('master')
@section('content')


<div class="custom">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        
        
        @foreach($products as $item)
        
        <div class="carousel-item {{$item['id'] == 4?'active':''}}">
            <a href="detail/{{$item['id']}}">
            <img src="{{$item['gallery']}}" style="height:400px !important" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h3 style="color:black">{{$item['name']}}</h3>
                <p style="color:black" >{{$item['description']}}</p>
            </div>
            </a>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>

<div class=" tranding-product my-5">
    <h3>Trending products</h3>
@foreach($products as $item)
        
    <a href="detail/{{$item['id']}}">
    <div class="trending-item">
            <img class="treding-image" src="{{$item['gallery']}}"  class="d-block w-100" alt="...">
                <div>
                    <h3 style="color:black">{{$item['name']}}</h3>
                    <p style="color:black" >{{$item['description']}}</p>
                </div>
    </div>
    </a>
        @endforeach
</div>


@endsection