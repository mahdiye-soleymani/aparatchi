<div id="register">
    <div class="register_header">
        <img src="<?php echo AddressMyWebsite . 'public/user/'; ?>images/register_page.png">
    </div>
    <div class="form_register">
        <?php echo '<p class="BYekan-sm" style="color:#721c24; ">' . $aparatchi['error'] . '</p>' ?>
        <?php echo '<p class="BYekan-sm" style="color:#00a65a; ">' . $aparatchi['success'] . '</p>' ?>
        <form id="form_register" method="post">
            <div>
                <label class="BYekan-sm">نام کاربری *</label>
                <input class="BYekan-sm" type="text" name="username_register" placeholder="نام کاربری خود را وارد کنید">
            </div>
            <div>
                <label class="BYekan-sm">ایمیل خود را وارد کنید *</label>
                <input class="BYekan-sm" type="text" name="email_register" placeholder="لطفا یک ایمیل معتبر وارد کنید">
            </div>
            <div>
                <label class="BYekan-sm">رمز عبور *</label>
                <input class="BYekan-sm" type="password" name="password_register"
                       placeholder="لطفا یک رمز عبور معتبر وارد کنید">
            </div>
            <div class="btn_register">
                <input class="BYekan-sm" type="submit" name="submit_register" value="ثبت نام">
            </div>
        </form>
    </div>
</div>