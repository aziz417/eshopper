<div class="form-group">
    <label class="col-lg-2 control-label">Name<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{isset($brand->Bname) ? $brand->Bname:''}}" id="slug-source" required="required" name="name" type="text" class="form-control">
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label">Description</label>
    <div class="col-lg-10">
        <textarea name="description" id="textarea2" class="form-control" rows="5">{{isset($brand->Bdescription) ? $brand->Bdescription:''}}</textarea>
    </div>
</div>


<div class="form-group">
    <div class="col-lg-10">
        <div class="icheckbox_square-green">
            <input type="hidden" name="id" value="{{isset($brand->Bid) ? $brand->Bid:''}}">
            <label class="col-lg-1 control-label" for="status">Status</label>
            @if(isset($brand->Bstatus))
                <input class="i-checks fs-check-box" id="fileInput" name="status" type="checkbox" checked value="{{isset($brand->Bstatus) ? $brand->Bstatus:''}} ">
            @else
                <input class="i-checks fs-check-box" id="fileInput" name="status" type="checkbox" value="1">
            @endif
        </div>
    </div>
</div>

