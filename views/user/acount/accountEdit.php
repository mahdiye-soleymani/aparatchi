<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
<!----start Main_header--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/topheader.php'; ?>
<!----End Main_header--->

<!----start top_menu--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/menu.php'; ?>
<!----End top_menu--->

<!-----------start-main-------------->
<form role="form" method="post" action="">
    <div id="main">
        <div class="Acount_info">
            <div class="tableone">
                <h4>اطلاعات کاربر</h4>
                <label>مشخصات کاربری</label>
                <table cellspacing="0">
                    <tr>
                        <td>
                            <span class="title_acount">آدرس ایمیل :</span>
                            <input type="text" name="email" readonly="readonly" value="<?php echo $aparatchi['showAccount']->email; ?>"
                        </td>
                        <td>
                            <span id="username" class="title_acount">نام کاربری :</span>
                            <input type="text" name="username" value="<?php echo $aparatchi['showAccount']->username; ?>"
                                   class="form-control" id="">
                        </td>
                        <td>
                            <span class="title_acount">پسوورد :</span>
                            <input type="text" name="pass" readonly="readonly" value="<?php echo $aparatchi['showAccount']->password; ?>"

                        </td>
                    </tr>


                </table>
                <a href="">
                    <input type="submit" name="submitedit" value="ارسال اطلاعات">
                </a>
            </div>


        </div>
    </div>
</form>
    <!--------------------- end main --------------------------->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>