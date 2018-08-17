<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
          <div class="col-md-6 col-md-offset-3 mt-20">
              <form class="form-horizontal" id="categories_form" action="<?php echo base_url() ?>admin/servicecategories/insert" method="post" enctype="multipart/form-data">

                <div class="form-group">
                <label class="control-label col-sm-12">Select Main Service Categories <span class="validationerror">*</span></label>
                <div class="col-sm-12">
                     <select class="form-control" name="main_category_id"  id="mainservice" required> 
                      <option required>Select Main Service Categories</option>
                      <?php foreach ($servicecategories as $key => $value) { ?>
                      <option value="<?php echo $value->smc_id; ?>"><?php echo $value->main_category; ?> </option>
                      <?php } ?>                      

                    </select>
                </div>
              </div>
               
              <div class="form-group">
                <label class="control-label col-sm-12" for="lastname">Sub Categories <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                  <input type="text" class="form-control" id="subcategories" placeholder="Enter Sub Categories" name="category" value="" required>
                </div>
              </div>
			  <div class="form-group">
				  <label class="control-label">Image <span class="validationerror">*</span></label>
				 <input type="file" name="userfile" id="image" name="image" class="form-control" required>
			 </div>
			<div class="form-group">
	            <label class="control-label">Description<span class="validationerror">*</span></label>
			    <textarea class="form-control rounded-0" id="description"  name="description" rows="4" required maxlength="200"></textarea>
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