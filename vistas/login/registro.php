<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - ProEdu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="dist/nice_admin/img/favicon.png" rel="icon">
  <link href="dist/nice_admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="dist/nice_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="dist/nice_admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="dist/nice_admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="dist/nice_admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="dist/nice_admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="dist/nice_admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="dist/nice_admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="dist/nice_admin/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="login.php?v=login" class="logo d-flex align-items-center w-auto">
                  <img src="dist/nice_admin/img/logo.png" alt="">
                  <span class="d-none d-lg-block">ProEdu</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
                    <div class="col-12">
                      <!--<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>-->
                      <select id="opcion" name="menu" class="form-select" aria-label="Default select example">
                        <option value="0" selected="">Open this select menu</option>
                        <option value="1">Profesores</option>
                        <option value="2">Estudiantes</option>
                        <!--<option value="3">Three</option>-->
                      </select>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div id="forkeys" class="col-12">
                      <label for="youkey-class" class="form-label">Key Classroom</label>
                      <input type="password" name="oukey-class" class="form-control" id="oukey-class" required>
                      <div class="invalid-feedback">Please enter your Key Classroom!</div>
                    </div>

                    <!--<div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>-->
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php?v=login">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Brayan Ferguson</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="dist/nice_admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="dist/nice_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/nice_admin/vendor/chart.js/chart.umd.js"></script>
  <script src="dist/nice_admin/vendor/echarts/echarts.min.js"></script>
  <script src="dist/nice_admin/vendor/quill/quill.min.js"></script>
  <script src="dist/nice_admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="dist/nice_admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="dist/nice_admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="dist/nice_admin/js/main.js"></script>
  <script>
    let selector =  document.querySelector('#opcion');
    let forkeys = document.querySelector('#forkeys');
    forkeys.style.display="none";
    selector.addEventListener("change",function(event){
      var sleTex = selector.options[selector.selectedIndex].innerHTML;
      var selVal = selector.value;
      if(selVal==1){
        forkeys.style.display="none";
      }else if(selVal==0){
        forkeys.style.display="none";
      }else{
        forkeys.style.display="block";
      }
      //alert("Selected Text: " + sleTex + " Value: " + selVal);
    });

  </script>

</body>

</html>