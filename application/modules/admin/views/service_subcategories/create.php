<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="categories_form" action="<?php echo base_url() ?>admin/servicesubcategories/insert" method="post" enctype="multipart/form-data">

                <div class="form-group">
                <label class="control-label col-sm-12" for="maincate">Select Main Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select class="form-control" id="maincate" multiple name="main_category[]" class="demo-default" required placeholder="Select Main Category...">
                      <option>SELECT MAIN CATEGORY</option>
                      <?php foreach ($maincate as $mckey => $mcvalue) { ?>
                        <option value="<?php echo $mcvalue->smc_id; ?>"><?php echo $mcvalue->main_category; ?></option>
                      <?php } ?>
                    </select>
                </div>
                <span class="validationerror"></span>
              </div>
               
              <div class="form-group">
                <label class="control-label col-sm-12" for="cate">Select Category<span class="validationerror">*</span></label>
                <div class="col-sm-12">
                    <select  multiple name="cate_id[]" class="demo-default"  placeholder="Select Category..." id="category" required>
                      <option>SELECT CATEGORY</option>
                      <?php foreach ($cate as $ckey => $cvalue) { ?>
                        <option value="<?php echo $cvalue->sc_id; ?>"><?php echo $cvalue->category; ?></option>
                      <?php } ?>
                    </select>
                </div>
                 <span class="validationerror"></span>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Sub Categories <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="sub_category" placeholder="Enter Sub Categories" name="sub_category" value="" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-12" for="image">Image <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="file" name="userfile" id="imagess" name="imagess" class="form-control" required>
                </div>
              </div>

                 <div class="form-group">
                <label class="control-label col-sm-12" for="description">Description <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <textarea class="form-control rounded-0" id="description"  name="description" rows="4" required maxlength="200"></textarea>
                </div>
              </div>

	
              <div class="form-group">   
                     <div class="col-sm-12"> 
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                   </div>
                </div>
              </div>
       
            </form>
          </div>
      </div>
    </div>
  </div>
</div>