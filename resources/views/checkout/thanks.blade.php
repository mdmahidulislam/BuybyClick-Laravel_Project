<!DOCTYPE html>
<html>
<head>
    <title>Thanks</title>
    @include('partials.head')
</head>
<body id="checkout">
    <header>
        @include('partials.header')
    </header>
	<div class="container wrapper">
        <div class="row cart-head">
            <div class="container">
            <div class="row">
                <div style="display: table; margin: auto;">
                    <span class="step step_complete"> <a href="/cart" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                    <span class="step step_complete"> <a href="/checkout" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                    <span class="step step_complete"> <a href="/checkout" class="check-bc">Thankyou</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                                        
                </div>
            </div>
            <div class="row">
            	<div class="well"><h1 class="text-center">Thankyou for Shopping. <a href="/home">Click Here</a> for more Products.</h1></div>
            </div>
            </div>
        </div>    
	</div>
	<hr>
    <footer class="bg-dark text-white">
    @include('partials.footer')
    </footer>
</body>
</html>