<?php include_once('header.php');?>
    <!--about us start-->
    <!--about us end-->
    <body>
      <section  class="blackish-filter-section headersec">
        <div class="blackish-filter">
          <div class="textside position-relative">
              <div class="content text-center">
                <br><br>
                <h1>CONTACT US</h1>
                <p class="nav-link nav-item" style="font-size: 21px;" style="color: white;"><a class="txt1" href="index.html">Home</a> / <a class="txt1" href="about.html">About</a> / <a class="txt1" href="menu.html">Menu</a></p>
                
              </div>
            </div>
            </div>
  </section>
  
  <section class="sec">
    <h1 align="center">Connect Us</h1>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sec">
        <form  method="POST" enctype="multipart/form-data" id="contactform">
		<div class="row">

							<div class="form-group col-6">				  

					    		<input type="text" class="form-control" id="name" name="name" placeholder="Name *" onkeyup="document.getElementById('nameErr').innerHTML=''" required>

									<label class="text-danger " id="nameErr"></label>

					  		</div>

					  		<div class="form-group col-6">				  

					    		<input type="text" class="form-control" id="email" name="email" placeholder="Your Email *" onkeyup="document.getElementById('emailErr').innerHTML=''" required>				   

								<label class="text-danger" id="emailErr"></label>

					  		</div>

					  		<div class="form-group col-6">				  

					    		<input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number *" onkeyup="document.getElementById('phoneErr').innerHTML=''" required>				   

								<label class="text-danger" id="phoneErr"></label>

					  		</div>
					  		<div class="form-group col-6">				  

					    		<input type="text" class="form-control" id="subject" name="subject" placeholder="Your subject *" onkeyup="document.getElementById('subjectErr').innerHTML=''" required>				   

								<label class="text-danger" id="subjectErr"></label>

					  		</div>

					  		<div class="form-group col-12">				  

							   <textarea id="message" name="message" class="form-control" rows="3" placeholder="Your Message *" onkeyup="document.getElementById('messageErr').innerHTML=''" required="required"></textarea>	   

							   <label class="text-danger" id="messageErr"></label>

							  </div>
							</div>
<div class="submit">
      <p class="btnform">
                <a class="contact-btn ser" href="about.html" type="submit" id="btnSubmit">Send Message</a>
</p>
    </div>


					<div id="mail-status"></div>

						</form>


<script>

 $(document).ready(function () {

		$("#btnSubmit").click(function (event) {

			event.preventDefault();

			  var data = new FormData($('#contactform')[0]);

			  if($('#name').val().trim()==''){

				 document.getElementById("nameErr").innerHTML = "Please provide Name";

				 document.getElementById("name").focus();

				 return;

			  }

			  if($('#email').val().trim()==''){

				 document.getElementById("emailErr").innerHTML = "Please provide Email";

				 document.getElementById("email").focus();

				 return;

			  }

			  if($('#phone').val().trim()==''){

				 document.getElementById("phoneErr").innerHTML = "Please provide Mobile Number";

				 document.getElementById("phone").focus();

				 return;

			  }
			   if($('#subject').val().trim()==''){

				 document.getElementById("subjectErr").innerHTML = "Please provide subject";

				 document.getElementById("subject").focus();

				 return;

			  }

			  if($('#message').val().trim()==''){

				 document.getElementById("messageErr").innerHTML = "Please provide Message";

				 document.getElementById("message").focus();

				 return;

			  }

			  $("#btnSubmit").prop("disabled", true);
 

      });

    //alert(dataString);

     //var form = $(this);

			  $.ajax({

            type: "POST",

            url: "send_email.php",

            data: data,

            processData: false,

				    contentType: false,

				    cache: false,

				success: function(data) { 
 console.log(data);
               $("#mail-status").removeClass('text-danger');

						$("#mail-status").addClass('text-success');

						$("#mail-status").html("We have received your enquiry successfully!");

						$("#btnSubmit").prop("disabled", false);

						$('#name').val('');

						$('#email').val('');

						$('#phone').val('');
						$('#subject').val('');

						$('#message').val('');

            },

            error: function(error){

                $("#mail-status").removeClass('text-success');

					     	$("#mail-status").addClass('text-danger');

					    	$("#mail-status").html("Something went wrong..Please try again!");

            }


        });

	});

     

    </script>

  </div>

  <!-- Bootstrap JS and Popper.js (for Bootstrap components that require it) -->
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sec">
    <img src="https://t4.ftcdn.net/jpg/03/37/96/33/360_F_337963325_EJuPjWslX3vAFxJ59L3y1cm6IsSfo07s.jpg" style="height: 100%;
    width: 600px;">
  </div>
        </div>
      </div>
    </div>
  </section>
  <script>

$(document).ready(function () {

   $("#btnSubmit").click(function (event) {

     event.preventDefault();

       var data = new FormData($('#contactform')[0]);

       if($('#name').val().trim()==''){

        document.getElementById("nameErr").innerHTML = "Please provide Name";

        document.getElementById("name").focus();

        return;

       }

       if($('#email').val().trim()==''){

        document.getElementById("emailErr").innerHTML = "Please provide Email";

        document.getElementById("email").focus();

        return;

       }

        if($('#subject').val().trim()==''){

        document.getElementById("subjectErr").innerHTML = "Please provide subject";

        document.getElementById("subject").focus();

        return;

       }

       if($('#message').val().trim()==''){

        document.getElementById("messageErr").innerHTML = "Please provide Message";

        document.getElementById("message").focus();

        return;

       }

       $("#btnSubmit").prop("disabled", true);

       

  

   //alert(dataString);

    //var form = $(this);

       $.ajax({

           type: "POST",

           url: "send_email.php",

           data: data,

           processData: false,

       contentType: false,

       cache: false,

       success: function(data) { 
console.log(data);
              $("#mail-status").removeClass('text-danger');

           $("#mail-status").addClass('text-success');

           $("#mail-status").html("We have received your enquiry successfully!");

           $("#btnSubmit").prop("disabled", false);

           $('#name').val('');

           $('#email').val('');

           $('#subject').val('');

           $('#message').val('');

           },

           error: function(error){

               $("#mail-status").removeClass('text-success');

           $("#mail-status").addClass('text-danger');

           $("#mail-status").html("Something went wrong..Please try again!");

           }

       

           

       

       });

 });

     });



    </script>
  <section style="margin-top: -29px;">
    <h1 align="center" style="padding-bottom: 24px;">Our Branches</h1>
    <div class="row">
      <div class="col-md-6 sec">
        <div class="branch-card">
          <div class="branch-title">Kolhapur</div>
          <div class="branch-address">
            Rajarampuri 6 lane,Kolhapur
          </div>
        </div>
      </div>
      <div class="col-md-6 sec">
        <div class="branch-card">
          <div class="branch-title">Pune</div>
          <div class="branch-address">
            Hadpsar,pune
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

 
  <section>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.569640360318!2d74.23843217392663!3d16.698405622289958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc101e7b54f2fab%3A0xeca671d8f385eef1!2sHaripriya%20Plaza!5e0!3m2!1sen!2sin!4v1690876770176!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <?php include_once('footer.php'); ?>