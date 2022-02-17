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
            <?php
            if (!empty($aparatchi['search'])) {
                foreach ($aparatchi['search'] as $value) { ?>
                    <li style="padding: 15px; text-align: center;">
                        <a href="<?php echo AddressMyWebsite . 'search/search/'. $value['id']?>">
                            <img style="height: 180px; width: 180px;border-radius: 50px;border: solid 2px; "
                                 src="<?php echo AddressMyWebsite . 'public/admin/img/post/' . $value['pic'] ?>">
                            <p><?php echo $value['title'] ?></p></a></li>
                <?php }
            } else {
                echo '<div style="margin: 15px 10px; color: red">مطلبی یافت نشد</div>';
            } ?>
        </div>
    </form>
    <!--------------------- end main --------------------------->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>