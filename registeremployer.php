<?php include('header.php')?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">

                    <span class="d-none d-lg-block">EXPLORE Internship</span>
                </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Employer Register </h5>
                        <p class="text-center small">Please enter your correct Details</p>
                    </div>

                    <form class="row g-3 needs-validation" id="register-employer" method="POST">
                    <input type="hidden" name="employerid" id="employerid">
                    <div class="col-12">
                            <div class="">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" required>
                            <div class="invalid-feedback">Please enter your Firstname!</div>
                            </div>
                            <div class="">
                            <label for="companyname" class="form-label">Company Name</label>
                            <input type="text" name="companyname" class="form-control" id="companyname" required>
                            <div class="invalid-feedback">Please enter your Lastname!</div>
                            </div>
                            
                        </div>

                        <div class="col-12">
                            <label for="companyemail" class="form-label">Commpany E-mail </label>
                            <input type="email" name="companyemail" class="form-control" id="companyemail" required>
                            <div class="invalid-feedback">Please enter your Email!</div>
                        </div>


                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                            <div class="invalid-feedback">Please enter your password!</div>
                        </div>

                       

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                        </div>
                        <div class="col-12 bg gx-0">
                        <p class="small mb-0 para ">By signing up, you agree to our Terms and Conditions. </p>
                            <button class="btn  w-100 text-white  " type="submit">Register</button>
                        </div>
                        <div class="col-12">
                            <p class="small mb-0 ">Already Registered <a href="employerlogin.php">Log-In</a></p>
                        </div>
                    </form>

                </div>
            </div>

            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

            </div>

        </div>
    </div>
</div>

<?php include('footer.php')?>

<script>

$(document).ready(function() {
      $('#register-employer').on('submit', function(e) {
          e.preventDefault(); // Prevent the default form submission
         
          var formData = $(this).serialize(); // Serialize form data
          formData +='&action=add';
          $.ajax({
              url: 'operations/emregister.php', // PHP script to process the form data
              type: 'POST',
              dataType: 'json', 
              data: formData,
              success: function(response) {
                //console.log(response);
                if (response.status == 'success') {
                  alert(response.message); // Display the response from the server
                  window.location.href= "employerlogin.php";
                }
                if (response.status == 'unsuccess') {
                  alert(response.message); // Display the response from the server
                  window.location.href= "registeremployer.php";
                }
                //loaddata();
              },
              error: function() {
                  // $('#response').html('An error occurred.');
              }
          });
      });
  });

  
</script>

