@extends('master')
@section('content')
<div class=" container">
    @foreach($items as $i)
    
        <div class="card" style="width: 18rem; ">
            <img class="card-img-top" src="{{$i->gallery}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$i->name}}</h5>
                <p class="card-text"><b>Details : </b>{{$i->description}}</p>
                <a href="#" class="btn btn-primary">Cancel</a>
            </div>
        
    </div>
    @endforeach
</div>

@endsection

