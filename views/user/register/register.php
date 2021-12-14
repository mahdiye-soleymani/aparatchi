<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
<!----start Main_header--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/topheader.php'; ?>
    <!----End Main_header--->

    <!----start top_menu--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/menu.php'; ?>
    <!----End top_menu--->

<!-----------start-main-------------->
<div id="main">
    <div id="register">
        <div class="register_header">
            <img src="images/register_page.png">
        </div>
        <div class="form_register">
            <form id="form_register">
                <div>
                    <label  class="BYekan-sm">نام کاربری</label>
                    <input class="BYekan-sm" type="text" name="username" placeholder="نام کاربری خود را وارد کنید">
                </div>
                <div>
                    <label  class="BYekan-sm">ایمیل خود را وارد کنید</label>
                    <input class="BYekan-sm" type="text" name="email" placeholder="لطفا یک ایمیل معتبر وارد کنید">
                </div>
                <div>
                    <label  class="BYekan-sm">رمز عبور</label>
                    <input class="BYekan-sm" type="password" name="password" placeholder ="لطفا یک رمز عبور معتبر وارد کنید">
                </div>
                <div class="btn_register">
                    <input class="BYekan-sm" type="submit" name="submit" value="ثبت نام">
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>