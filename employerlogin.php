<?php include('config.php');
include('header.php');

if($_SERVER['REQUEST_METHOD']=== 'POST')

{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql=" SELECT * FROM registeremployer WHERE companyemail=:companyemail AND password=:password";
  $stmt= $conn->prepare($sql);
  $parameter= array(
    ':companyemail'=> $username,
    ':password' => $password
  );

  $stmt -> execute($parameter);
  $result = $stmt-> fetch(PDO::FETCH_ASSOC);
 //print_r($result); die;

  if(!empty($result)){
    $_SESSION['companyemail']= $result['Companyemail'];
    $_SESSION['companyname'] = $result['Companyname'];
    $_SESSION['fullname'] = $result['Fullname'];
    header('Location: admin.php');
  }


}

?>

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
                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                <p class="text-center small">Employer Log-In</p>
              </div>

              <form class="row g-3 needs-validation"  method="POST" >

                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control" id="username" required>
                    <div class="invalid-feedback">Please enter your username.</div>
                  </div>
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
                  <button class="btn  w-100 text-white  " type="submit">Login</button>
                </div>
                <div class="col-12">
                  <p class="small mb-0">Don't have account? <a href="registeremployer.php">Create an account</a></p>
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