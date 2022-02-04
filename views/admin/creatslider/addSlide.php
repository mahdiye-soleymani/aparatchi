<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
<div class="wrapper">
    <!-- Navbar -->
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/nav.php'; ?>.
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/slider.php'; ?>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <br/>
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="card card-dark ">
                            <div class="card-header">
                                <h3 class="card-title">افزودن اسلایدر</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <form method="post" enctype="multipart/form-data">
                                <div class="col-sm-8 col-sm-offset-2" style="margin-top: 10px;">
                                    <?php
                                    if (isset($_GET['addSlide']) && !empty($_GET['addSlide'])) {
                                        if ($_GET['addSlide'] == 'error') {
                                            echo '<div class="alert alert-danger" style="margin-top: 5px;">پسوند اپلود شده مجاز نمیباشد</div>';
                                        }
                                        if ($_GET['addSlide'] == 'success') {
                                            echo '<div class="alert alert-success" style="margin-top: 5px;">با موفقیت اپلود شد</div>';
                                        }
                                    }
                                    ?>
                                    <p>عکسی را جهت نمایش در اسلایدر اپلود کنید</p>
                                    <span class="btn btn-primary btn-file btn-block">
                                        انتخاب عکس<input type="file" name="file_upload"></span>
                                    <center>
                                        <button type="submit" name="btnslider" class="btn btn-danger"
                                                style="margin-top: 10px!important;">اپلود
                                        </button>
                                    </center>
                                </div>
                            </form>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>


                </div>
            </div>
        </div>
    </div>


    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <!--        Anything you want-->
        </div>
    </footer>
</div>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>
