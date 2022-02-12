<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
<!----start Main_header--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/topheader.php'; ?>
<!----End Main_header--->
<!----start top_menu--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/menu.php'; ?>
<!----End top_menu--->

<!-----------start-main-------------->
<div id="main">
    <div id="content" style="background-color: #ffb922;height:auto;width: 1200px;">
        <div class="header_info">
            <div class="header_info_right">
                <img src="<?php echo AddressMyWebsite . 'public/admin/img/news/' .$aparatchi['showNews']->pic ?>">
            </div>
            <div class="header_info_left">
                <h4 class="BYekan-sm">
                    <?php
                    echo $aparatchi['showNews']->title;
                    ?>
                </h4>

                <div class="header_info_dispaly_left">
                    <ul class="BYekan-sm">
                        <li>  نویسنده:
                            <?php
                            echo $aparatchi['showNews']->writer;
                            ?>
                        </li>
                        <li> زمان ارسال :
                            <?php
                            echo $aparatchi['showNews']->time;
                            ?>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="more">

                <?php
                echo $aparatchi['showNews']->content;
                ?>
            </div>

            <div class="tab_more">

                <div id="child_tab">

                </div>
            </div>

        </div>
    </div>

    <!-----------End-content-------------->

    <!------------End-main--------------->
</div>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>
