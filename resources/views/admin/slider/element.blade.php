
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
            <input type="text" class="input-xlarge" name="name" value="{{isset($category->Cname) ? $category->Cname:''}}" id="date01" >
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="fileInput">Image</label>
        <div class="controls">
            <input  class="input-file uniform_on" id="fileInput" required name="image" type="file"><br><br>
            @if(!empty($data['product']->Pimage))
                <img src="{{asset('images/products/'.$data['product']->Pimage)}}" width="150" height="300">
            @endif
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="fileInput">Status</label>
        <div class="controls">
            @if(isset($category->Cstatus))
                <input class="input-file uniform_on" id="fileInput" name="status" type="checkbox" checked value="{{isset($category->Cstatus) ? $category->Cstatus:''}}">
            @else
                <input class="input-file uniform_on" id="fileInput" name="status" type="checkbox" value="1">
            @endif

        </div>
    </div>
    <input type="hidden" name="id" value="{{isset($category->Cid) ? $category->Cid:''}}">
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn">Cancel</button>
    </div>
</fieldset>
