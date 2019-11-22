
<div class="form-group">
    <label class="col-lg-2 control-label">Name<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{isset($category->Cname) ? $category->Cname:''}}" id="slug-source" required="required" name="name" type="text" class="form-control">
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label">Description</label>
    <div class="col-lg-10">
        <textarea name="description" id="textarea2" class="form-control" rows="5">{{isset($category->Cdescription) ? $category->Cdescription:''}}</textarea>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-10">
        <div class="icheckbox_square-green">
            <input type="hidden" name="id" value="{{isset($category->Cid) ? $category->Cid:''}}">
            <label class="col-lg-1 control-label" for="status">Status</label>
            @if(isset($category->Cstatus))
                <input class="i-checks fs-check-box" id="fileInput" name="status" type="checkbox" checked value="{{isset($category->Cstatus) ? $category->Cstatus:''}} ">
            @else
                <input class="i-checks" id="fileInput" name="status" type="checkbox" value="1">
            @endif
        </div>
    </div>
</div>


