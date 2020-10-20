<html>

<title>Login Page</title>
<meta content="" name="descriptison">
<meta content="" name="keywords">

<link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
<link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<head>
    <link href="<?= base_url() ?>/assets/css/login.css" rel="stylesheet">
    <link href="<?= base_url() ?>/mdb/pro/css/mdb.min.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body id="LoginForm wow fadeInRight">
    <div class="container">
        <h1 class="form-heading">login Form</h1>
        <div class="login-form">
            <div class="main-div" style="border: 1px solid #d6d6d6; margin-top:200px; border-radius:10px;">
                <div class="panel">
                    <h2>Admin Login</h2>
                    <p>Please enter your email and password</p>
                </div>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <?= session()->getFlashdata('msg'); ?>
                <?php endif; ?>
                <form method="POST" id="Login" action="/login/masuk">
                    <div class="md-form">
                        <input name="email" type="email" id="materialLoginFormEmail" class="form-control">
                        <label for="materialLoginFormEmail">E-mail</label>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input name="password" type="password" id="materialLoginFormPassword" class="form-control">
                        <label for="materialLoginFormPassword">Password</label>
                    </div>
                    <!-- <div class="forgot">
                        <a href="reset.html">Forgot password?</a>
                    </div> -->
                    <div class="forgot">
                        <a href="reset.html" class="text-primary font-weight-bold">Buat akun</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>

                </form>
            </div>
            <p class="botto-text"> Designed by Sunil Rajput</p>
        </div>
    </div>
    </div>


</body>

<script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/mdb.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/wow/wow.min.js"></script>


</html>