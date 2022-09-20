<!DOCTYPE html>
<html lang="en {{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mind Map</title>
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" rel="style=
    sheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admincss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(/images/loginImg.jpg);">
                    <span class="login100-form-title-1">
                      Sign Up for Gold Subscription
                    </span>
                </div>

                <form class="login100-form validate-form" action="signin" method="post">
                    @csrf
                    <div class="mb-4">
                    <select class="form-select" aria-label="currency" id="currency" name="currency">
  <option selected>Prefered Currency</option>
  <option value="USD">USD</option>
  <option value="GBP">GBP</option>
  <option value="EUR">EUR</option>
</select>         
</div>
                   
<div>
<select class="form-select" aria-label="Default select example" id="sub" name="sub">
<option selected>Select Your Prefered Subscription</option>
  <option  value="2.99$">2.99$ USD /monthly Personal Subscription</option>
  <option value="25$">25$ USD /yearly Personal Subscription</option>
</select>
</div>
<p><srtong>EU customers: VAT</srtong> will be calculated during checkout based on your location</p>
<div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      I agree to the Mind Map Gold Terms of Service
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>

                  


                    <div class="container-login100-form-btn p-4">
                        <button type="submit" class="login100-form-btn">
                            Subscribe
                        </button>
                        <button type="submit" class="login100-form-btn">
                            Go Back
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>