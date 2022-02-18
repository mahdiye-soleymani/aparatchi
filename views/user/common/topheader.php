<header id="main_header">
    <!----start header--->
    <div id="header">

        <!----start logo--->
        <div id="logo">
            <a href="<?php echo AddressMyWebsite; ?>"><img
                        src="<?php echo AddressMyWebsite; ?>/public/user/images/logo.png"></a>
        </div>
        <!----End logo--->

        <!----start header_row_top_right--->
        <div id="header_row_top_right" class="BYekan-sm">
            <div id="header_row_top">
                <?php if (isset($_SESSION['emailmember'])) { ?>
                    <a href="<?php echo AddressMyWebsite . 'acount/accEdit/' . $_SESSION['emailmember'] ?>"
                       style="color:#fc910a;font-size: 15px;margin-right: 10px;border:solid 2px;padding: 3px ">پنل
                        کاربری</a>
                    <a href="<?php echo AddressMyWebsite . 'exitsite' ?>"
                       style="color: #fc910a;font-size: 15px;margin-right: 10px;border:solid 2px;padding: 3px ">خروج از
                        وبسایت</a>
                <?php } else { ?>
                    <div style="float: right;padding-left: 10px">
<!--                        <img style="height: 25px; width: 25px; "-->
<!--                             src="--><?php //echo AddressMyWebsite . 'public/user/images/login.png' ?><!--">-->
                        <span class=" bg_span_login style_span_header_top"></span>
                        <a href="<?php echo AddressMyWebsite . 'login' ?>">وارد شوید</a>
                    </div>
                    <div>
                        <span class="bg_span_register style_span_header_top"></span>
                        <a href="<?php echo AddressMyWebsite . 'register' ?>">ثبت نام کنید</a></div>
                <?php } ?>
            </div>
            <form class="" method="get" action="<?php echo AddressMyWebsite . 'search/search' ?>">
                <div class="">
                    <input name="search" type="text" autocomplete="off" class="form-control" style="width: 300px;height:30px;font-size: 20px;
                    border-bottom-right-radius: 50px; border-top-right-radius: 50px;text-align: center "
                           placeholder="نام پست را جهت جستجو وارد نمایید">

                    <button style="background-color: #fc530a;font-size: 20px;height:30px;color:white;
                        border-bottom-left-radius: 50px; border-top-left-radius: 50px;width: 100px; cursor: pointer"
                            type="submit">
                        جستجو
                    </button>

                </div>
            </form>
        </div><!----End header_row_top_right--->

    </div><!----End Main_header--->

</header>