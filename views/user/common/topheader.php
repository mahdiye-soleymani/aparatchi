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
                    <span class="bg_span_login style_span_header_top"></span>
                    <a href="<?php echo AddressMyWebsite . 'login' ?>"> وارد شوید</a>
                    <span class="bg_span_register style_span_header_top"></span>
                    <a href="<?php echo AddressMyWebsite . 'register' ?>">ثبت نام کنید</a>
                <?php } ?>
            </div>
            <div id="header_row_bottom">
                <div id="search_box">
                    <input class="BYekan-sm" type="text" name="search_box"
                           placeholder="فیلم مورد نظرتان را جستجو کنید....">
                    <span></span>
                </div>
            </div>
        </div><!----End header_row_top_right--->

    </div><!----End Main_header--->

</header>