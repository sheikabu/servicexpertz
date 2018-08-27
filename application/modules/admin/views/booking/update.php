<div class="container-fluid col-md-9 col-sm-9">

  <div class="row content">
    <div class="col-md-12 col-sm-12">      
      <div class="row">      
          <div class="col-md-6 col-md-offset-3 mt-20">
        <form class="form-horizontal" id="booking_form" action="<?php echo base_url() ?>admin/booking/updated" method="post">

        <div class="form-group">
        <label class="control-label col-sm-12" for="bookingid">User Id<span class="validationerror">*</span></label>
        <div class="col-sm-12">
        <input type="text" class="form-control"  placeholder="Enter Last Name" name="booking_id"  value="<?php echo $booking[0]->booking_id; ?>" required>
        </div>    
        </div>
        <div class="form-group">
        <label class="control-label col-sm-12" for="lastname">Services Id <span class="validationerror">*</span></label>
        <div class="col-sm-12">          
        <input type="text" class="form-control" placeholder="Enter Last Name" name="services_id" value="<?php echo $booking[0]->services_id; ?>" required>
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
        <input  type="text" class="form-control rounded-0"   name="selected_time"   value="<?php echo $booking[0]->selected_time; ?>"></input>
        </div>
        </div>	
        <div class="form-group">
        <label class="control-label col-sm-12" for="comments">Comments <span class="validationerror">*</span></label>
        <div class="col-sm-12">          
        <input type="text" class="form-control rounded-0" id="comments"  name="comments" value="<?php echo $booking[0]->comments; ?>"></input>
        </div>
        </div>	
        <div class="form-group">
        <label class="control-label col-sm-12" for="price">Price<span class="validationerror">*</span></label>
        <div class="col-sm-12">          
        <input type="text" class="form-control rounded-0" id="price"  name="price"    value="<?php echo $booking[0]->price; ?>"></input>
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