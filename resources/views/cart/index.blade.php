<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	@include('partials.head')
	<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>
<body id="cartbody">

	<header>
   @include('partials.header')
	</header>

<div class="row cart-head">
    <div class="container">
    <div class="row">
        <p></p>
    </div>
    <div class="row">
        <div style="display: table; margin: auto;">
            <span class="step step_complete"> <a href="/cart" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
            <span class="step_thankyou check-bc step_complete">Checkout</span>
            <span class="step_thankyou check-bc step_complete">Thank you</span>
        </div>
    </div>
    <div class="row">
        <p></p>
    </div>
    </div>
</div>   


  <h1>Shopping Cart</h1><hr>
  <table class="table table-striped table-hover table-bordered">

        <tbody>
            <tr>
                <th>S.no</th>
                <th>Item</th>
                <th>QTY</th>
                <th>Unit Price</th>
                <th>Price</th>
                <th>Remove</th>
            </tr>
            <tr>
                <?php 
                    $s=0;
                    $price=0;
                    $subtotal=0;
                    $vat=0;
                    $total=0;
                 ?>
                @foreach($cartProducts as $cp)
                    <tr>  
                      <td>{{++$s}}</td>
                      <td>{{$cp->name}}</td>
                      <td>{{$cp->qty}}</td>
                      <td>BDT {{$cp->price}}</td>
                      <?php 
                        $price=($cp->qty*$cp->price);
                       ?>
                      <td>BDT {{$price}}</td>
                      <td> <a href="/cart/removefromcart/{{$cp->rowId}}"><i class="glyphicon glyphicon-remove"></i></a></td>  
                    </tr>
                    <?php  
                        $subtotal+=$price;
                    ?>
                @endforeach 
            </tr>
            <tr>
                <th colspan="3"><span class="pull-right">Sub Total</span></th>
                <th>BDT {{$subtotal}}</th>
            </tr>
            <tr>
              <?php 
                $vat=(($subtotal*2)/100);
               ?>
                <th colspan="3"><span class="pull-right">VAT 2%</span></th>
                <th>BDT {{$vat}}</th>
            </tr>
            <tr>
              <?php $total=$subtotal+$vat; ?>
                <th colspan="3"><span class="pull-right">Total</span></th>
                <th>BDT {{$total}}</th>
            </tr>
            <tr>
                <td><a href="/home" class="btn btn-primary">Continue Shopping</a></td>
                <td colspan="3"><a href="{{route('checkout.index')}}" class="pull-right btn btn-success">Checkout</a></td>
            </tr>
        </tbody>
    </table>          
	<hr>
	<footer class="bg-dark text-white">
   @include('partials.footer')
	</footer>
</body>	
</html>