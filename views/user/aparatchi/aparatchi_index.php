<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
<!----start Main_header--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/topheader.php'; ?>
<!----End Main_header--->

<!----start top_menu--->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/menu.php'; ?>
<!----End top_menu--->

<!-----------start-main-------------->
<div id="main">
    <!-----------start-sidebar-------------->
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'sidebar.php'; ?>
    <!-----------End-sidebar-------------->

    <!-----------start-content-------------->
    <div id="content">
        <?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'slider.php'; ?>
        <?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'post.php'; ?>
    </div>
    <!-----------End-content-------------->
</div>
<!------------End-main--------------->
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>