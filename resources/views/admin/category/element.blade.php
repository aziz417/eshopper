
<div class="form-group">
    <label class="col-lg-2 control-label">Name<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{isset($category->name) ? $category->name:old('name')}}"
               id="slug-source"   name="name" type="text" class="form-control">
        @error('name')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label">Description</label>
    <div class="col-lg-10">
        <textarea name="description" id="textarea2" class="form-control" rows="5">{{isset($category->description) ? $category->description:old('description')}} </textarea>
        @error('description')
        <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <div class="col-lg-10">
        <div class="icheckbox_square-green">
            <input type="hidden" name="id" value="{{isset($category->id) ? $category->id:''}}">
            <label class="col-lg-1 control-label" for="status">Status</label>
            @if(isset($category->status))
                <input class="i-checks fs-check-box" id="fileInput" name="status" type="checkbox" checked value="{{isset($category->status) ? $category->status:''}} ">
            @else
                <input class="i-checks" id="fileInput" name="status" type="checkbox" value="1">
            @endif
        </div>
    </div>
</div>


