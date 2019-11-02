@include('frontend.elements.header')
@include('frontend.elements.sidebar')
<section id="cart_items">
    <div class="container">
        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-9 clearfix">
                    <div class="bill-to">
                        <p>Bill To</p>
                        <div class="form-one">
                            <h2>Shipping from</h2>
                            <form action="{{route('shipping.store')}}" method="post">
                                @csrf
                                <input type="Email"name="shippingEmail" required placeholder="Email*">
                                <input type="text" name="shippingPhone" required placeholder="Phone Number">
                                <input type="text" name="shippingFname" required placeholder="First Name *">
                                <input type="text" name="shippingLname" required placeholder="Last Name *">
                                <input type="text" name="shippingAddress" required placeholder="Address *">
                                <input type="text" name="shippingCity" required placeholder="City *">
                                <button type="submit" class="btn-success"> Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
                <span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
                <span>
						<label><input type="checkbox"> Paypal</label>
					</span>
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->
@include('frontend.elements.footer')
