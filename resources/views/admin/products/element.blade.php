
<div class="form-group">
    <label class="col-lg-2 control-label">Name<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{isset($data['product']->Pname) ? $data['product']->Pname:''}}" id="slug-source" required="required" name="name" type="text" class="form-control">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Categories<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <select  class="form-control" required name="category_id">
            <option selected>Select Category</option>
            <?php
            if(isset($data)){
            foreach ( $data['category'] as $category ){
            ?>
            <option
                <?php
                if(isset($data['product']->category_id)){
                    if($category->id == $data['product']->category_id){
                        echo "selected";
                    }
                }
                ?>

                value="{{$category->id}}">{{$category->name}}</option>
            <?php  }}?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Brands<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <select class="form-control" required name="brand_id">
            <option selected>Select Brand</option>
            <?php
            if(isset($data)){
            foreach ( $data['brands'] as $brand ){
            ?>
            <option
                <?php
                if(isset($data['product']->brand_id)){
                    if($brand->Bid == $data['product']->brand_id){
                        echo "selected";
                    }
                }
                ?>
                value="{{$brand->Bid}}">{{$brand->Bname}}</option>
            <?php  }}?>
        </select>
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label">Image</label>
    <div class="col-lg-10">
        <input  class="form-control" id="fileInput" name="image" type="file"><br><br>
        @if(!empty($data['product']->Pimage))
            <img src="{{asset('images/products/'.$data['product']->Pimage)}}" width="150" height="300">
        @endif
    </div>
</div>

<div class="form-group"><label class="col-lg-2 control-label">Description</label>
    <div class="col-lg-10">
        <textarea name="description" id="textarea2" class="form-control" rows="5">{{isset($data['product']->Pdescription) ? $data['product']->Pdescription:''}}</textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Price<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input value="{{isset($data['product']->price) ? $data['product']->price:''}}" id="slug-source" required="required" name="price" type="text" class="form-control">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label" for="date01">Size<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input required type="text" class="form-control" value="{{isset($data['product']->Psize) ? $data['product']->Psize:''}}"  name="size">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label" for="date01">Color<span class="required-star"> *</span></label>
    <div class="col-lg-10">
        <input required type="text" class="form-control" value="{{isset($data['product']->Pcolor) ? $data['product']->Pcolor:''}}"  name="color">
    </div>
</div>


<div class="form-group">
    <div class="col-lg-10">
        <div class="icheckbox_square-green">
            <input type="hidden" name="product_id" value="{{isset($data['product']->product_id) ? $data['product']->product_id:''}}">
            <label class="col-lg-1 control-label" for="status">Status</label>
            @if(isset($data['product']->Pstatus))
                <input class="i-checks fs-check-box" id="fileInput" name="status" type="checkbox" checked value="{{isset($data['product']->Pstatus) ? $data['product']->Pstatus:''}} ">
            @else
                <input class="i-checks" id="fileInput" name="status" type="checkbox" value="1">
            @endif
        </div>
    </div>
</div>
