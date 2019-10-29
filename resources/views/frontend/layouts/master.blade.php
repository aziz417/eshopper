@include('frontend.elements.header')
@include('frontend.elements.slider')
<section>
    <div class="container">
        <div class="row">
            @include('frontend.elements.sidebar')
            <div class="col-sm-9 padding-right">
                @yield('content')
            </div>
        </div>
    </div>
</section>
@include('frontend.elements.footer')
