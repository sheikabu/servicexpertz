    
  
  <script type="text/javascript" src="js/canvasjs.min.js"></script>
  <!--SHEIK Chart script end-->
  
  
    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
<div class="container-fluid col-md-9 col-sm-9">
  <div class="row content">
    <div class="col-md-12 col-sm-12">      
  <div class="width-fluid mt-10"> 
        <div class="row">
            <div class="col-xl-4 col-sm-4 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-comments"></i>
                  </div>
                  <div class="mr-5"><?php echo $usercount; ?> USERS!</div>
                </div>
               <span class="card-footer text-white clearfix small z-1"><a href="<?php echo base_url(); ?>admin/user/list_user" class="text-white" style="text-decoration: none;">LIST >></a>                   
                </span>
              </div>
            </div>
            <div class="col-xl-4 col-sm-4 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <div class="mr-5"><?php echo $vendorcount; ?> Vendors!</div>
                </div>
              <span class="card-footer text-white clearfix small z-1"><a href="<?php echo base_url(); ?>admin/vendors/list_vendor" class="text-white" style="text-decoration: none;">LIST >></a>                   
                </span>
              </div>
            </div>
            <div class="col-xl-4 col-sm-4 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"><?php echo $booking; ?> Bookings!</div>
                </div>
               <span class="card-footer text-white clearfix small z-1"><a href="<?php echo base_url(); ?>admin/booking/list_bookings" class="text-white" style="text-decoration: none;">LIST >></a>                   
                </span>
              </div>
            </div>
        </div>
        <!--  Area Chart Example -->
        <div class="row">
        	<div class="col-sm-8 col-xs-12 chart-wrap">
		        <div class="card mb-3">
		            <div class="card-header">
		              <i class="fas fa-chart-area"></i>
		              YEARLY REPORT (USER AND BOOKING)</div>
		            <div class="card-body"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
		                <div class="col-md-7 mb-3 ">
		  <div id = "container" style = "width: 550px; height: 400px;">
      </div>
      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['months', 'USER', 'BOOKINGS'],
               ['January',  100,      10],
               ['February', 90,      15],
               ['March',  80,      20],
               ['April',  70,       25],
               ['May',  60,      25],
			         ['June',  60,      20],
               ['July',  80,      30],
			         ['August',  40,     12],
			         ['September', 60,      40],
               ['October',  20,      21],
			         ['November', 65,      12],
               ['December',  25,      36]
            ]);
            var options = {title: 'Yearly report'};  
            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script> 
      </div>
		            </div>
		           
		        </div>
		    </div>
		    <div class="col-sm-4 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Recent Booking!
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">

                                <?php foreach ($bookingdetail as $bookingkey => $bookingvalue) { ?>
                                   <!--<a href="#">-->
                                   <span class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i><?php echo $bookingvalue->services; ?>
                                    <span class="pull-right text-muted small"><em><?php $bdate = $bookingvalue->booking_date;
                                    echo date("F d, Y h:ia", strtotime($bdate)); ?></em>
                                    </span>
                                    </span>
                                <!--</a>-->
                                <?php } ?>
                               
                          
                                
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
		    </div>
        </div>
        <!-- /.  Area Chart Example -->
  
       </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  setTimeout(function(){
   window.location.reload(1);
}, 20000);
</script>