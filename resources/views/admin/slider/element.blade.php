
<fieldset>
    <span class="alert-success">
        <?php
        $massage = Session::get('massage');
        if($massage){
            echo $massage;
            Session::forget('massage');
        }
        ?>
        </span>
    <div class="control-group">
        <label class="control-label" for="typeahead">Name</label>
        <div class="controls">
            <input type="text" class="input-xlarge" name="name" value="{{isset($sliderItem->name) ? $sliderItem->name:''}}" id="date01" >
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="fileInput">Image</label>
        <div class="controls">
            <input name="oldImage" value="{{isset($sliderItem->image) ? $sliderItem->image:''}}" type="hidden">
            <input  class="input-file uniform_on" id="fileInput" required name="image" type="file"><br><br>
            @if(!empty($sliderItem->image))
                <img src="{{asset('images/products/'.$sliderItem->image)}}" width="230">
            @endif
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="fileInput">Status</label>
        <div class="controls">
            @if(isset($sliderItem->status))
                <input class="input-file uniform_on" id="fileInput" name="status" type="checkbox" checked value="{{isset($sliderItem->Cstatus) ? $sliderItem->Cstatus:''}}">
            @else
                <input class="input-file uniform_on" id="fileInput" name="status" type="checkbox" value="1">
            @endif

        </div>
    </div>
    <input type="hidden" name="sliderId" value="{{isset($sliderItem->id) ? $sliderItem->id:''}}">
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn">Cancel</button>
    </div>
</fieldset>
