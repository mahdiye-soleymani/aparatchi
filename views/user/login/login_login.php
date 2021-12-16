<div id="register">
    <div class="register_header">
        <img src="<?php echo AddressMyWebsite . 'public/user/' ?>images/register_page.png">
    </div>
    <div class="form_register">
        <?php
        if($aparatchi['messageloginerrorsite'] !==null){
            echo '<a class="BYekan-sm">'.$aparatchi['messageloginerrorsite'].'</a>';
        }
        ?>
        <form id="form_register" method="post">
            <div>

                <label class="BYekan-sm">ایمیل</label>
                <input class="BYekan-sm" type="email" name="email_loginsite" placeholder="ایمیل خود را وارد کنید">
            </div>
            <div>
                <label class="BYekan-sm">رمز عبور</label>
                <input class="BYekan-sm" type="password" name="password_loginsite" placeholder="لطفا یک رمز عبور معتبر وارد کنید">
            </div>

            <div>
                <label class="BYekan-sm">مرا بخاطر بسپار</label>
                <input class="checkbox" type="checkbox" name="remember">
                <a class="BYekan-sm" href="<?php echo AddressMyWebsite . 'forgetpassword'; ?>">رمز عبور را فراموش کرده ام</a>
            </div>
            </br>
            <div class="btn_register">
                <input class="BYekan-sm" type="submit" name="btnloginsite" value="ورود به وبسایت">
            </div>
        </form>
    </div>
</div>