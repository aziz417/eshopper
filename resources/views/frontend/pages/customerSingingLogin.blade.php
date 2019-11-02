@include('frontend.elements.header')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <?php
                    $massage = Session::get('massage');
                    echo $massage;
                    ?>
                    <form action="{{route('customer.login')}}" method="post">
                        @csrf
                        <input type="email" required name="customerEmail" placeholder="Email Address"/>
                        <input type="password" required name="customerPass"  placeholder="Password"/>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <p class="btn-success">
                        <?php
                            $massage = Session::get('massage');
                            echo $massage;
                        ?>
                    </p>
                    <form action="{{route('customer.singing')}}" method="post">
                        @csrf
                        <input type="text" required name="customerName" placeholder="Full Name"/>
                        <input type="email" required name="customerEmail" placeholder="Email Address"/>
                        <input type="password" required name="customerPass"  placeholder="Password"/>
                        <input type="text" required name="customerPhone" placeholder="Phone"/>
                        <input type="text" required name="customerAddress" placeholder="Address"/>
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@include('frontend.elements.footer')
