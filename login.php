

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link href="img/favicon.png" rel="apple-touch-icon-precomposed" />
  <link href="img/favicon.png" rel="shortcut icon" type="image/png" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <title>MyMedi - eCommerce HTML Template</title>
  <link
    rel="stylesheet"
    href="plugins/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="fonts/Linearicons/Font/demo-files/demo.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    rel="stylesheet"
    href="../../css?family=Jost:400,500,600,700&amp;display=swap&amp;ver=1607580870" />
  <link rel="stylesheet" href="plugins/bootstrap4/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="plugins/owl-carousel/assets/owl.carousel.css" />
  <link rel="stylesheet" href="plugins/slick/slick/slick.css" />
  <link
    rel="stylesheet"
    href="plugins/lightGallery/dist/css/lightgallery.min.css" />
  <link
    rel="stylesheet"
    href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css" />
  <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css" />
  <link rel="stylesheet" href="plugins/noUiSlider/nouislider.css" />
  <link
    rel="stylesheet"
    href="plugins/lightGallery/dist/css/lightgallery.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="ps-page">
   <?php include "includes/header.php"?>
    <div class="ps-account">
      <div class="container">
        <div class="row d-flex justify-content-center">
          
          <div class="col-6 col-md-6">
            <form action="controllers/login.php" method="post">
              <div class="ps-form--review border border_dark p-4 rounded">
                <h2 class="ps-form__title">login</h2>
                <div class="ps-form__group">
                  <label class="ps-form__label">email</label>
                  <input class="form-control ps-form__input" type="email" placeholder="enter your email"  name="email"/>
                </div>
                
                <div class="ps-form__group">
                  <label class="ps-form__label">Password *</label>
                  <div class="input-group">
                    <input
                    placeholder="enter your 9 digit password"
                      class="form-control ps-form__input"
                      type="password" name="password" />
                    <div class="input-group-append">
                      <a
                        class="fa fa-eye-slash toogle-password"
                        href="javascript: vois(0);"></a>
                    </div>
                  </div>
                  
                </div>
                <div class="ps-form__submit">
                  <button class="ps-btn ps-btn--warning">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/footer.php"?>
  </div>
 
  <script
    data-cfasync="false"
    src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="plugins/jquery.min.js"></script>
  <script src="plugins/popper.min.js"></script>
  <script src="plugins/bootstrap4/js/bootstrap.min.js"></script>
  <script src="plugins/select2/dist/js/select2.full.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
  <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
  <script src="plugins/noUiSlider/nouislider.min.js"></script>
  <script src="plugins/slick/slick/slick.min.js"></script>
  <script src="plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
  <!-- custom code-->
  <script src="js/main.js"></script>
</body>

</html>