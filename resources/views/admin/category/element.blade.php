
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
               id="slug-source" name="slug" readonly type="text" class="form-control">
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
            <option value="" >Select</option>
            @foreach($parent_categories as $parent_category)
                <option @if( isset($category) and $parent_category->id == $category->parent_id) selected @endif
                value="{{ $parent_category->id }}">{{ $parent_category->name }}</option>
            @endforeach
        </select>
        @error('parent_id')
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
            <input {{ (isset($category->status) AND $category->status == 1) ? 'checked':'' }} name="status" value="1" type="checkbox" class="i-checks" id="status">
        </div>
    </div>
</div>


