$(document).ready( function () { 

     $("#user_form").validate( {
        rules: {
          firstname: "required",          
          email: {
          required: true,
          email: true
          },
          phone: "required",
        },
        messages: {
          firstname: "Please enter your firstname",          
          email: "Please enter a valid email address",
          phone: "Please enter your Phone Number",
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


     //next form here

     } );
