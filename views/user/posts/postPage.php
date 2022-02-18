<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
<!----start Main_header--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/topheader.php'; ?>
<!----End Main_header--->
<!----start top_menu--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/menu.php'; ?>
<!----End top_menu--->

<!-----------start-main-------------->
<div id="main">
    <div id="content" style="background-color: #fff;height:auto;width: 1200px;">
        <div class="header_info" >
            <div class="header_info_right">
                <img src="<?php echo AddressMyWebsite . 'public/admin/img/post/' .$aparatchi['showPost']->pic ?>">
            </div>
            <div class="header_info_left">
                <h4 class="BYekan-sm">
                    <?php
                    echo $aparatchi['showPost']->title;
                    ?>
                </h4>

                <div class="header_info_dispaly_left">
                    <ul class="BYekan-sm">
                        <li>  نویسنده:
                            <?php
                            echo $aparatchi['showPost']->writer;
                            ?>
                        </li>
                        <li> زمان ارسال :
                            <?php
                            echo $aparatchi['showPost']->time;
                            ?>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
            <div class="more">

                <?php
                echo $aparatchi['showPost']->content;
                ?>
            </div>


            <div class="tab_more">
                <ul>
                    <li>نظرات کاربران</li>
                </ul>
                <div id="child_tab">
                    <form method="post">
                        <div class="ask" style="padding: 25px;">
                            <textarea></textarea></br>
                            <button type="submit" name="sendComment" class="btn btn-block btn-primary"
                                    style="border-radius: 0!important;">ارسال
                            </button>
                        </div>
                        <div class="ask_respnse">
                            <div class="ask_respnse_header">
                                <div class="user_response">
                                    <label class="">توسط علی</label>
                                    <label class="">1397/5/10</label>
                                </div>
                            </div>
                            <div class="ask_respnse_content">
                                <p>فیلم خوبی بود.</p>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

    </div>

    <!-----------End-content-------------->

    <!------------End-main--------------->
</div>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>
