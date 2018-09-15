<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">
        
          <div class="col-md-6 col-md-offset-3 mt-20">
               <form class="form-horizontal" id="booking_form" action="<?php echo base_url() ?>admin/booking/updated" method="post">
        <div class="form-group">
        <label class="control-label col-sm-12" for="lastname">Service</label>
        <div class="col-sm-12"> 
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $service->services; ?>">
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-12" for="image">Selected Date <span class="validationerror">*</span></label>
        <div class="col-sm-12">          
        <input type="text" class="form-control"  placeholder="Enter Last Name" name="selected_date" value="<?php echo $booking[0]->selected_date; ?>" required>
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-12" for="selectedtime">Selected Time <span class="validationerror">*</span></label>
        <div class="col-sm-12">   
        
                <select id="time" name="selected_time" class="form-control demo-default"  required placeholder="Select Time Slot...">

                      <option>SELECT TIME SLOT</option>
                     <?php foreach ($time as $tkey => $tvalue) { ?>
                        <option value="<?php echo $tvalue->ts_id; ?>" <?php if($tvalue->ts_id==$time_slot->ts_id) { ?> selected <?php } ?>><?php echo $tvalue->ts_name; ?></option>
                      <?php } ?>                     
                </select>
        </div>
        </div>	
        <div class="form-group">
        <label class="control-label col-sm-12" for="comments">Comments <span class="validationerror">*</span></label>
        <div class="col-sm-12">     
        <textarea rows="5" cols="49" name="comments"><?php echo $booking[0]->comments; ?></textarea>            
        </div>
        </div>	
       
        <div class="form-group">
        <label class="control-label col-sm-12" for="price">Assign Service Provider<span class="validationerror">*</span></label>        
        <div class="col-sm-12">                
                <?php $sp_id  = json_decode($booking[0]->service_provider); ?>    
              <select  multiple name="service_provider_id[]" class="demo-default"  required placeholder="Select Service Provider..." id="services" required>
                      <option>SELECT SERVICE PROVIDER</option>
                      <?php foreach ($sp_list as $skey => $svalue) { ?>
                        <option value="<?php echo $svalue->spid; ?>" <?php if($sp_id!='') { if(in_array($svalue->spid,$sp_id)) { ?> selected <?php } } ?>><?php echo $svalue->first_name.' '.$svalue->last_name; ?></option>
                      <?php } ?>
                    </select>
        </div>
        </div>
      	
        
        </div>
           <div class="col-md-6 col-md-offset-3 mt-20">
            <div class="form-group">
        <label class="control-label col-sm-12" for="price">Price</label>
        <div class="col-sm-12">          
        <input type="text" class="form-control rounded-0" id="price"  name="price" readonly value="<?php echo $service->price; ?>">
        </div>
        </div>  
           <div class="form-group">
                <label class="control-label col-sm-12" for="status">Additional Cost</label>
                <div class="col-sm-12">          
                <input type="text" class="form-control rounded-0" readonly value="<?php echo $service ->additonal_cost; ?>">
                </div>
                </div>  
                 <div class="form-group">
                <label class="control-label col-sm-12">Parameter</label>
                <div class="col-sm-12">          
                  <select name="parameter" class="form-control" id="parameter" disabled>
                    <option value="">--SELECT--</option>
                    <option value="Per Hour" <?php if($service->parameter=="Per Hour") { ?> selected <?php } ?>>Per Hour</option>
                    <option value="Per Day" <?php if($service->parameter=="Per Day") { ?> selected <?php } ?>>Per Day</option>
                    <option value="Per Number" <?php if($service->parameter=="Per Number") { ?> selected <?php } ?>>Per Number</option>
                  </select>  
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="status">Total Cost <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                <input type="text" class="form-control" id="total_cost" placeholder="Enter Total Cost" name="total_cost" value="<?php echo $booking[0]->total_cost;  ?>" required>
                </div>
                </div>  
                <div class="form-group">
                <label class="control-label col-sm-12" for="status">GST(%) <span class="validationerror">*</span></label>
                <div class="col-sm-12">          
                <input type="text" class="form-control" id="gst" name="gst" placeholder="Enter GST" value="<?php echo $booking[0]->gst;  ?>" required>
                </div>
                </div>  
                <div class="form-group">
        <label class="control-label col-sm-12" for="status">Status <span class="validationerror">*</span></label>
        <div class="col-sm-12">    
         <select class="form-control" id="status"  name="status">
             <option value="pending" <?php if($booking[0]->status=="pending") { ?> selected <?php } ?>>Pending</option>
             <option value="in-progress" <?php if($booking[0]->status=="in-progress") { ?> selected <?php } ?>>In Progress</option>
             <option value="completed" <?php if($booking[0]->status=="completed") { ?> selected <?php } ?>>Completed</option>
             <option value="on-hold" <?php if($booking[0]->status=="on-hold") { ?> selected <?php } ?>>On Hold</option>
             <option value="rejected" <?php if($booking[0]->status=="rejected") { ?> selected <?php } ?>>Rejected</option>
         </select>      
        
        </div>
        </div>
                <input type="hidden" class="form-control" name="booking_id" value="<?php echo $booking[0]->booking_id; ?>">
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