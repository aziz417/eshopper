<fieldset>
        <div class="control-group">
            <label class="control-label" for="date01">Product Name</label>
            <div class="controls">
                <input type="text"  required class="input-xlarge" value="jk{{isset($data['product']->Pname) ? $data['product']->Pname:''}}"  name="name">
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
                        <option
                            <?php
                            if(isset($data['product']->category_id)){
                                if($category->Cid == $data['product']->category_id){
                                    echo "selected";
                                }
                            }
                            ?>

                            value="{{$category->Cid}}">{{$category->Cname}}</option>
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
        <div class="control-group">
            <label class="control-label" for="fileInput">Image</label>
            <div class="controls">
                <input  class="input-file uniform_on" id="fileInput" name="image" type="file">
            </div>
        </div>
        <div class="control-group hidden-phone">
            <label class="control-label"  for="textarea2">Description</label>
            <div class="controls">
                <textarea required id="textarea2" name="description" rows="3">hj{{isset($data['product']->Pdescription) ? $data['product']->Pdescription:''}}</textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Price</label>
            <div class="controls">
                <input required type="text" class="input-xlarge" value="10{{isset($data['product']->price) ? $data['product']->price:''}}" name="price">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Size</label>
            <div class="controls">
                <input required type="text" class="input-xlarge" value="45{{isset($data['product']->Psize) ? $data['product']->Psize:''}}"  name="size">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Color</label>
            <div class="controls">
                <input required type="text" class="input-xlarge" value="yy{{isset($data['product']->Pcolor) ? $data['product']->Pcolor:''}}" name="color">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date01">Status</label>
            <div class="controls">
                @if(isset($data['product']->Pstatus))
                    <input  class="input-file uniform_on" id="fileInput" name="status" type="checkbox" checked value="{{isset($data['product']->Pstatus) ? $data['product']->Pstatus:''}}">
                @else
                    <input  class="input-file uniform_on" id="fileInput" name="status" type="checkbox" value="1">
                @endif
            </div>
        </div>
        <input type="hidden" name="product_id" value="{{isset($data['product']->product_id) ? $data['product']->product_id:''}}">

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn">Cancel</button>
        </div>
    </fieldset>

