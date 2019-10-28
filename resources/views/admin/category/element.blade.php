
<fieldset>
    <span class="alert-success">
        <?php
            $massage = Session::get('massage');
            if($massage){
                echo $massage;
                Session::Flush();
            }
        ?>
        </span>
    <div class="control-group">
        <label class="control-label" for="typeahead">Name</label>
        <div class="controls">
            <input type="text" class="input-xlarge" name="name" placeholder="Category Name" id="date01" required >
        </div>
    </div>
    <div class="control-group hidden-phone">
        <label class="control-label" for="textarea2">Description</label>
        <div class="controls">
            <textarea class="cleditor" name="description" id="textarea2" rows="3" required></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="fileInput">Status</label>
        <div class="controls">
            <input class="input-file uniform_on" id="fileInput" name="status" type="checkbox" value="1">
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Add Category</button>
        <button type="reset" class="btn">Cancel</button>
    </div>
</fieldset>
