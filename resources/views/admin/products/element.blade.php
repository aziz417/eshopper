    <fieldset>
        <div class="control-group">
            <label class="control-label" for="date01">Product Name</label>
            <div class="controls">
                <input type="text"  required class="input-xlarge" value="{{isset($product->Bname) ? $product->Bname:''}}"  name="name">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Categories</label>
            <div class="controls">
                <select required name="category_id">
                    <option selected>Select Category</option>
                    <?php
                        if(isset($data)){
                        foreach ( $data['category'] as $category ){
                        ?>
                        <option value="{{$category->Cid}}">{{$category->Cname}}</option>
                        <?php  }}?>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Brands</label>
            <div class="controls">
                <select required name="brand_id">
                    <option selected>Select Brand</option>
                    <?php
                        if(isset($data)){
                        foreach ( $data['brands'] as $brand ){
                        ?>
                        <option value="{{$brand->Bid}}">{{$brand->Bname}}</option>
                    <?php  }}?>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="fileInput">Image</label>
            <div class="controls">
                <input  class="input-file uniform_on" id="fileInput" name="image" type="file">
            </div>
        </div>
        <div class="control-group hidden-phone">
            <label class="control-label"  for="textarea2">Description</label>
            <div class="controls">
                <textarea required id="textarea2" name="description" rows="3">{{isset($product->Pdescription) ? $product->Pdescription:''}}</textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Price</label>
            <div class="controls">
                <input required type="text" class="input-xlarge" value="{{isset($product->price) ? $product->price:''}}" name="price">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Size</label>
            <div class="controls">
                <input required type="text" class="input-xlarge" value="{{isset($product->Psize) ? $product->Psize:''}}"  name="size">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Color</label>
            <div class="controls">
                <input required type="text" class="input-xlarge" value="{{isset($product->Pcolor) ? $product->Pcolor:''}}" name="color">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Status</label>
            <div class="controls">
                @if(isset($product->Pstatus))
                    <input  class="input-file uniform_on" id="fileInput" name="status" type="checkbox" checked value="{{isset($product->Pstatus) ? $product->Pstatus:''}}">
                @else
                    <input  class="input-file uniform_on" id="fileInput" name="status" type="checkbox" value="1">
                @endif
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn">Cancel</button>
        </div>
    </fieldset>

