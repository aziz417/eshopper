
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

<div class="form-group">
    <label class="col-lg-2 control-label">Slug<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{isset($category->slug) ? $category->slug:old('slug')}}"
               id="slug-source" name="slug" type="text" class="form-control">
        @error('slug')
        <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Parent Categories<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <select class="form-control" name="parent_id">
            <option>Select</option>
            @foreach($parent_categories as $parent_category)
                <option value="{{ $parent_category->id }}">{{ $parent_category->name }}</option>
            @endforeach
        </select>
        @error('parent-id')
        <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label">Image</label>
    <div class="col-lg-10">
        <input  class="form-control" id="fileInput" name="img" type="file"><br>
        <input  class="form-control" id="fileInput" value="{{ isset($category->image) ? $category->image:'' }}" name="oldImg" type="hidden"><br>
        @error('img')
        <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @if(!empty($category->image))
            <img src="{{asset('backend/uploads_images/category/'.$category->image) }}" width="80" height="100">
        @endif
    </div>
</div><br>


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


