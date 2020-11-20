<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="login-wrap mt-5">
    <div class="login-html">
        <div class="row">
            <div class="col text-center mb-5">
                <img src="/assets/img/logos.png" alt="" width="35%" class="mb-3">
                <span class="text-light font-weight-bold">http://www/sahabat.gorontalorov.go.id</span>
            </div>
        </div>

        <!-- <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label> -->

        <?php if (session()->getFlashdata('msg')) : ?>
            <?= session()->getFlashdata('msg'); ?>
        <?php endif; ?>
        <div class="login-form">
            <form method="POST" id="Login" action="/login/masuk">
                <!-- <div class="sign-in-htm"> -->
                <div class="">
                    <div class="group">
                        <!-- <label for="user" class="label">Username or Email</label> -->
                        <input name="email" id="user" type="text" class="input" placeholder="Username or Email">
                    </div>
                    <div class="group">
                        <!-- <label for="pass" class="label">Password</label> -->
                        <input name="password" id="pass" type="password" class="input" placeholder="Password" data-type="password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Masuk">
                        <a href="#" class="btn btn-danger button mt-2 mr-2">Daftar</a>
                    </div>
                    <!-- <div class="hr"></div> -->
                </div>
            </form>

            <!-- <div class="for-pwd-htm">
                <div class="group">
                    <label for="user" class="label">Username or Email</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <input type="" class="button" value="Reset Password">
                </div>
                <div class="hr"></div>
            </div> -->
        </div>
    </div>
</div>


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



<script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/mdb.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/wow/wow.min.js"></script>


</html>