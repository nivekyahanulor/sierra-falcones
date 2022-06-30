<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="assets/img/favicon.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="accounts/assets/css/bootstrap.css">
    <link rel="stylesheet" href="accounts/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="accounts/assets/css/app.css">
    <link rel="stylesheet" href="accounts/assets/css/pages/auth.css">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="auth" class="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">

                    </div>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-warning alert-dismissable">
                            <center><strong>Login Error!</strong> Please Try Again!</center>
                        </div>
                    <?php } ?>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data.</p>
                    <form method="post" action="controller/auth.php">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username" placeholder="Username" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button style="background-color: #cca934; border: none" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="" style="background-color: #ddba48e1; height: 100%">
                    <center>
                        <div style="height:230px;"></div><a href="index.php">
                            <img src="assets/img/favicon.png">
                            <h1 style="color:#332b20; font-weight:600; font-family:  sans-serif;">
                                <a style="letter-spacing: -1px; font-size:35px; ">HUMANITARIAN ORDER OF</a>
                                <br>
                               <a style="letter-spacing: 3px; font-size:42.5px; "> SIERRA FALCONÈS</a>
                            </h1>
                    </center>
                </div>
            </div>
        </div>

    </div>
</body>

</html>