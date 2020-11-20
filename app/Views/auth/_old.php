<body id="LoginForm wow fadeInRight">
    <div class="container">
        <!-- <h1 class="form-heading">login Form</h1> -->
        <div class="login-form">
            <div class="main-div" style="border: 1px solid #d6d6d6; margin-top:100px; border-radius:10px;">
                <div class="panel">
                    <h2>Admin Login</h2>
                    <p>Please enter your email and password</p>
                </div>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <?= session()->getFlashdata('msg'); ?>
                <?php endif; ?>
                <form method="POST" id="Login" action="/login/masuk">
                    <div class="md-form">
                        <input name="email" type="text" id="materialLoginFormEmail" class="form-control">
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