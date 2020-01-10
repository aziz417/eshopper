<div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="modalTitle">Modal title</h4>
            </div>
            <div class="ibox-content">

                <form id="productForm" enctype="multipart/form-data" class="form-horizontal">
                    @csrf

                    <input type="hidden" name="row_id" id="row_id"> {{--// this row id--}}
                    <input type="hidden" id="productHiddenImageName" name="productHiddenImageName"> {{--// this image name from database  --}}
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Name<span class="required-star"> *</span></label>
                            <input value="" id="name" name="name" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Size</label>
                            <input value="" name="size" id="size" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Slug<span class="required-star"> *</span></label>
                            <input value="" id="slug" readonly="readonly" style="cursor: not-allowed" name="slug" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Color</label>
                            <input value="" name="color" id="color" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Category<span class="required-star"> *</span></label>
                            <select class="form-control" id="category" name="category_id" required="required">
                                <option value="selectedCategoryValue" selected>Choose... </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Brand<span class="required-star"> *</span></label>
                            <select class="form-control" id="brand" name="brand_id" required="required">
                                <option value="selectedBrandValue" selected>Choose...</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Price<span class="required-star"> *</span></label>
                            <input value="" required="required" id="price" name="price" type="number" class="form-control">
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" maxlength="191" id="description" class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Image</label>
                            <input  id="image" name="img" type="file" class="form-control">
                        </div>
                    </div>

                    <div class="form-group" >
                            <h2 class="">Preview</h2>
                            <div style="border: groove; width: 243px; height: 183px;">
                                <img style="width: 243px; height: 183px;" src="" id="output_image" alt="">
                            </div>

                        </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="icheckbox_square-green">
                                    <label class="col-lg-1 control-label" for="status">Status</label>
                                    <input name="status"  style="margin: 0px 0px 0px 27px; size: 28px; height: 14px; width: 23px; " value="1" type="checkbox" class="i-checks" id="status">
                                </div>

                                <div class="icheckbox_square-green">
                                    <label class="col-lg-1 control-label" for="featured">Featured</label>
                                    <input name="featured" style="margin: 0px 0px 0px 42px; size: 28px; height: 14px; width: 23px; " value="1" type="checkbox" class="i-checks" id="featured">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="submit" id="action" class="btn btn-primary" value="Add Product">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
