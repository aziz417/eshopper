<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $AllSlider = DB::table('tbl_slider')->where('status',1)->get();
                            $count = 0;
                            foreach ($AllSlider as $test){?>
                            @if($count == 0)
                                <li data-target="#slider-carousel" data-slide-to="{{$count}}" class="active"></li>
                             @else
                                 <li data-target="#slider-carousel" data-slide-to="{{$count}}"></li>
                             @endif
                            <?php $count++;} ?>
                    </ol>

                    <div class="carousel-inner">
                        <?php

                        $i = 1;
                        foreach ($AllSlider as $sliderItem){
                        ?>
                        @if($i == 1)
                        <div style="padding: 0!important; margin: 0 auto!important;" class="item active">
                            @else
                                <div style="padding: 0!important; margin: 0 auto!important;" class="item">
                             @endif
                            <div class="col-sm-12">
                                <img style="height: 350px!important; width: 1000px!important; margin: 0 auto!important;" src="{{asset('images/products/'.$sliderItem->image)}}" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <?php $i++; }?>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
