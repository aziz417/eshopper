
<div class="form-group">
    <label class="col-lg-2 control-label">Name<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{isset($sliderItem->name) ? $sliderItem->name:''}}" id="slug-source" required="required" name="name" type="text" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Image<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input name="oldImage" value="{{isset($sliderItem->image) ? $sliderItem->image:''}}" type="hidden">
        <input  class="input-file uniform_on" id="fileInput" required name="image" type="file"><br><br>
        @if(!empty($sliderItem->image))
            <img src="{{asset('images/products/'.$sliderItem->image)}}" width="230">
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-lg-10">
        <div class="icheckbox_square-green">
            <input type="hidden" name="id" value="{{isset($sliderItem->status) ? $sliderItem->status:''}}">
            <label class="col-lg-1 control-label" for="status">Status</label>
            @if(isset($sliderItem->status))
                <input class="i-checks fs-check-box" id="fileInput" name="status" type="checkbox" checked value="{{isset($sliderItem->status) ? $sliderItem->status:''}} ">
            @else
                <input class="i-checks" id="fileInput" name="status" type="checkbox" value="1">
            @endif
        </div>
    </div>
</div>



