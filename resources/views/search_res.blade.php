@extends('master')
@section('content')
<div class="container my-4">
    <?php $n = 1 ?>
    @foreach($result as $item)
        <div class="row">
        <a href="detail/{{$item['id']}}"><img class="s_r img-thumbnail" src="{{$item['gallery']}}"  width="30px" alt="">
            </a>
            <p><b><?php echo $n ?>] Product name :</b> {{$item['name']}}</p>
                <p ><b>Detail :</b> {{$item['description']}}</p>
                <p><b>Price :</b>Rs {{$item['price']}}/-</p><br><br>
        </div>
<?php $n++?>

    @endforeach
</div>

@endsection