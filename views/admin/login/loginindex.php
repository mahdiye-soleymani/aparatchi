<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
    <div class="login-box">
        <div class="login-logo">
           <b>ورود به پنل مدیریت</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <?php

                if ($aparatchi['message_error_loginadmin'] != null) {
                   echo "<p style='color: red'>".$aparatchi['message_error_loginadmin']."</p>";
                }
                ?>
                <p class="login-box-msg">فرم زیر را تکمیل کنید </p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="emailloginadmin" autocomplete="false" class="form-control" autocapitalize="off" placeholder="ایمیل" value="<?php if(isset($_COOKIE['EmailCookiea'])) echo $_COOKIE['EmailCookiea'];?>">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="passwordloginadmin" class="form-control"  placeholder="رمز عبور"value="">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="rememberloginsite1" <?php if(isset($_COOKIE['PasswordCookiea'])) echo 'checked';?>> یاد آوری من
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button name="btnloginadmin" type="submit" class="btn btn-success  btn-block btn-flat">ورود
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!--                <div class="social-auth-links text-center mb-3">-->
                <!--                    <p>- OR -</p>-->
                <!--                    <a href="#" class="btn btn-block btn-primary">-->
                <!--                        <i class="fa fa-facebook mr-2"></i> ورود با اکانت فیسوبک-->
                <!--                    </a>-->
                <!--                    <a href="#" class="btn btn-block btn-danger">-->
                <!--                        <i class="fa fa-google-plus mr-2"></i> ورود با اکانت گوگل-->
                <!--                    </a>-->
                <!--                </div>-->
                <!-- /.social-auth-links -->

                <!--                <p class="mb-1">-->
                <!--                    <a href="#">رمز عبورم را فراموش کرده ام.</a>-->
                <!--                </p>-->
                <!--                <p class="mb-0">-->
                <!--                    <a href="register.html" class="text-center">ثبت نام</a>-->
                <!--                </p>-->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>