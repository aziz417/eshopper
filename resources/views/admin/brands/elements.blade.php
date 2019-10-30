
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
            <input type="text" class="input-xlarge" name="name" value="{{isset($brand->Bname) ? $brand->Bname:''}}" id="date01" required >
        </div>
    </div>
    <div class="control-group hidden-phone">
        <label class="control-label" for="textarea2">Description</label>
        <div class="controls">
            <textarea class="input-xlarge" name="description" id="textarea2" rows="5" required> {{ isset($brand->Bdescription) ? $brand->Bdescription : ''}}</textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="fileInput">Status</label>
        <div class="controls">
            @if(isset($brand->status))
                <input class="input-file uniform_on" id="fileInput" name="status" type="checkbox" checked value=" {{ isset($brand->Bstatus) ? $brand->Bstatus : ''}}">
            @else
                <input class="input-file uniform_on" id="fileInput" name="status" type="checkbox" value="1">
            @endif

        </div>
    </div>
    <input type="hidden" name="id" value="{{isset($brand->Bid) ? $brand->Bid:''}}">
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn">Cancel</button>
    </div>
</fieldset>