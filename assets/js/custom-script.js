$(document).ready( function () { 

     $("#user_form").validate( {
        rules: {
          firstname: "required",          
          email: {
          required: true,
          email: true
          },
          phone: "required",
		      password:"required",
        },
        messages: {
          firstname: "Please enter your firstname",          
          email: "Please enter a valid email address",
          phone: "Please enter your Phone Number",
		      password: "Please enter your password",
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "validationerror" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );


     $("#vendor_form").validate( { 
        rules: {
          companyname: "required", 
          comanyaddress: "required",
          pincode: "required",
          telephone: "required",
		      faxno: "required",
          email: {
          required: true,
          email: true
          },
          web: "required",
		  namecrepresentative: "required",
		  emailcrepresentative: "required",
		  pancard: "required",
		  titledesignation: "required",
		  directno: "required",
		  mobilenoe: "required",
		  datecestablished: "required",
		  grossannual: "required",
		  bankname: "required",
		  bankaddress: "required",
		  staffname: "required",
		  staffaddress: "required",
		  skills: "required",
		  experience: "required",
        },
        messages: {
          companyname: "Please enter your company name",          
          email: "Please enter a valid email address",
          pincode: "Please enter your pincode",
		  telephone: "Please enter your telephone",
		  faxno: "Please enter your faxno",
		  comanyaddress: "Please enter your comany address",          
          web: "Please enter a valid web",
          namecrepresentative: "Please enter your Name of  Company Representative",
		  emailcrepresentative: "Please enter your telephone",
		  pancard: "Please enter your pancard",
		  titledesignation: "Please enter a valid web",
          directno: "Please enter your Name of  Company Representative",
		  mobileno: "Please enter your Mobileno",
		  datecestablished: "Please enter your Fax No",
		  grossannual: "Please enter your Name of  Company Representative",
		  bankname: "Please enter your bank name",
		  bankaddress: "Please enter your bank address",
		  staffname: "Please enter a valid staff name",
          staffaddress: "Please enter your Name of  Company Representative",
		  skills: "Please enter your skills",
		  experience: "Please enter your experience",
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "validationerror" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );

	  
	   $("#categories_form").validate( {
        rules: {
          //mainservice: "required", 
          mainservice: { valueNotEquals: "" },         
          subcategories: "required",
        },
        messages: {
          //mainservice: "Please Select Main Service Categories",   
          mainservice: { valueNotEquals: "Please select an item!" },      
          subcategories: "Please enter a Sub Categories",
          
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "validationerror" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );
	  
	   $("#serviceprovider_form").validate( {
      ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',
        rules: {
		      mincost: "required",          
          image: "required",
		      empid: "required",          
          firstname: "required",
		      lastname: "required",          
          phone: "required",
          pincode_id: "required",
		      city_sp: "required", 
		      email: {
           required: true,
            email: true
          },		  
          		      timeslot: "required"
        },
        messages: {    
		      mincost: "Please enter your Min Cost",          
          image: "Please upload image",
		      empid: "Please enter your  Emp ID",          
          firstname: "Please enter your First Name",
		      lastname: "Please enter your Last Name",          
          phone: "Please enter your Phone Number",
          pincode_id: "Please enter your Pincode",
		      email: "Please enter your valid email address",          
          city_sp: "Please select an item!"
		      
         
          
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "validationerror" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }

        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );
	  
	   $("#service_form").validate( {
        rules: {
          select_main_category: { valueNotEquals: "" },          
         
          select_category: { valueNotEquals: "" },
		  service:"required",
		  images:"required",
		  description:"required",
		  terms_conditions: "required"
      //parameter: { valueNotEquals: "" }
        },
        messages: {
                    
          select_main_category: { valueNotEquals: "Please select an item!" },
          select_category: { valueNotEquals: "Please select an item!" },
		   service: "Please enter your service",
		   images: "Please upload your images",
		   description: "Please enter your description",
		    terms_conditions: "Please enter your terms_conditions"
        
       // parameter: { valueNotEquals: "Please select an item!" }
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "validationerror" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }

        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );

	  
	  

     } );


 $("#booking_form").validate( {
        rules: {
          total_cost:"required",
          gst:"required"
        },
        messages: {
          total_cost: "Please enter total cost",
          gst: "Please enter GST"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "validationerror" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }

        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );


 $("#employee_details_form").validate( { 
        rules: {         
          staffname: "required",
          staffaddress: "required",
          skills: "required",
          experience: "required",
        },
        messages: {         
          staffname: "Please enter a valid staff name",
          staffaddress: "Please enter your Name of  Company Representative",
          skills: "Please enter your skills",
          experience: "Please enter your experience",
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "validationerror" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );


$('#next').on('click', function() {
    $("#vendor_form").valid();
});

function goBack() {
    window.history.back();
}
