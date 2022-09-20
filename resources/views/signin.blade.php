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
                       Log in to use the Mind Map with your email 
                    </span>
                </div>

                <form class="login100-form validate-form" action="signin" method="post">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="mail" id="mail" placeholder="Enter Your Email" required>
                        <span class="focus-input100"></span>
                    </div>
					@error('mail')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" id="username" placeholder="Enter Username" required>
                        <span class="focus-input100"></span>
                    </div>
                  


                    <div class="container-login100-form-btn p-4">
                        <button type="submit" class="login100-form-btn">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>