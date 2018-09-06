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
        <label class="control-label col-sm-12" for="price">Price<span class="validationerror">*</span></label>
        <div class="col-sm-12">          
        <input type="text" class="form-control rounded-0" id="price"  name="price"    value="<?php echo $booking[0]->price; ?>"></input>
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
        <div class="form-group">
        <label class="control-label col-sm-12" for="status">Status <span class="validationerror">*</span></label>
        <div class="col-sm-12">          
        <input type="text" class="form-control rounded-0" id="status"  name="status" value="<?php echo $booking[0]->status; ?>"></input>
        </div>
        </div>	
        <input type="hidden" class="form-control" name="booking_id" value="<?php echo $booking[0]->booking_id; ?>">
        <div class="form-group">   
        <div class="col-sm-12"> 
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </div>
        </div>

        </form>
          </div>
      </div>
    </div>
  </div>
</div>