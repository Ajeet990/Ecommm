@extends('master')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>

                <th scope="col">Amount</th>
                <th scope="col">Tax</th>
                <th scope="col">Delivery charge</th>
                <th scope="col">Final Amount</th>

            </tr>
        </thead>
        <tbody>
            <tr>

                <td>RS. {{$total}} /-</td>
                <td>Rs. 0 /-</td>
                <td>Rs. 50 /-</td>
                <td>Rs. {{$total + 50}} /- only</td>
            </tr>

        </tbody>
    </table>

    <form action="orderplace" method="POST">
        @csrf
        <div class="form-floating my-4">
            Enter your address below:
            <textarea name="address" class="form-control" placeholder="Enter you full address here"></textarea>

        </div>
        <div>
            Choose your payment : <br>
            <input type="radio" value="phonepay" name="paymethod">PhonePay<br>
            <input type="radio" value="googlepay" name="paymethod" checked="checked">GooglePay<br>
            <input type="radio" value="ime" name="paymethod">IME<br>
            <input type="radio" value="cod" name="paymethod">Cash on Delivery<br>
            <input type="radio" value="atm" name="paymethod">Swipe atm card<br>

        </div>
        <button type="submit" class="btn btn-success my-2">Confirm my Order</button>
    </form>

</div>

@endsection