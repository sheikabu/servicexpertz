<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
        
          <div class="col-md-6 col-md-offset-3 mt-20">
               <form class="form-horizontal" id="booknow_form" action="<?php echo base_url() ?>admin/booknow/create" method="post">
         <div class="form-group">
        <label class="control-label col-sm-12" for="lastname">Select User <span class="validationerror">*</span></label>
        <div class="col-sm-12"> 
         <select id="user_name" name="selected_user" class="form-control demo-default" required="required" placeholder="Select User...">
              <option value="">SELECT USER</option>
              <?php foreach ($users as $ukey => $uvalue) { ?>
                <option value="<?php echo $uvalue->user_id; ?>"><?php echo $uvalue->name; ?></option>
              <?php } ?>            
        </select>

        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-12" for="lastname">Service <span class="validationerror">*</span></label>
        <div class="col-sm-12"> 
         <select id="services" name="selected_service" class="form-control demo-default"  required placeholder="Select Service...">
              <option value="">SELECT SERVICE</option>
              <?php foreach ($services as $skey => $svalue) { ?>
                <option value="<?php echo $svalue->sid; ?>"><?php echo $svalue->services; ?></option>
              <?php } ?>            
        </select>

        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-12" for="image">Selected Date <span class="validationerror">*</span></label>
        <div class="col-sm-12">          
        <input type="Date" class="form-control"  placeholder="Enter Last Name" name="selected_date" value="" required>
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-12" for="selectedtime">Select Time <span class="validationerror">*</span></label>
        <div class="col-sm-12">   
        
                <select id="time" name="selected_time" class="form-control demo-default"  required placeholder="Select Time Slot...">

                      <option value="">SELECT TIME SLOT</option>
                     <?php foreach ($time as $tkey => $tvalue) { ?>
                        <option value="<?php echo $tvalue->ts_id; ?>"><?php echo $tvalue->ts_name; ?></option>
                      <?php } ?>                     
                </select>
        </div>
        </div>	

                <div class="form-group">
        <label class="control-label col-sm-12" for="selectedtime">Select City <span class="validationerror">*</span></label>
        <div class="col-sm-12">   
        
                <select id="cities" name="selected_city" class="form-control demo-default"  required placeholder="Select City...">

                      <option value="">SELECT City</option>
                     <?php foreach ($cities as $citieskey => $citiesvalue) { ?>
                        <option value="<?php echo $citiesvalue->city_id; ?>"><?php echo $citiesvalue->city_name; ?></option>
                      <?php } ?>                     
                </select>
        </div>
        </div>  
       
         <div class="form-group">
        <label class="control-label col-sm-12" for="status">Pincode</label>
        <div class="col-sm-12">    
          <input type="text" name="pincode" class="form-control"  value="">     
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-12" for="status">Status <span class="validationerror">*</span></label>
        <div class="col-sm-12">    
         <select class="form-control" id="status"   name="status">
             <option value="pending">Pending</option>
             <option value="in-progress">In Progress</option>
             <option value="completed">Completed</option>
             <option value="on-hold">On Hold</option>
             <option value="rejected">Rejected</option>
         </select>      
        
        </div>
        </div>
        <input type="hidden" name="source" class="form-control"  value="web">
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