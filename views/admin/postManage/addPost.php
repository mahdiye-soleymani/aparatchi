
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
                    <center>
                    <div class="col-sm-12">
                        <div class="card card-dark ">

                            <div class="card-header">
                                <h3 class="card-title">پست جدید</h3>
                            </div>
                            <!-- /.card-header -->
                            <form method="post" enctype="multipart/form-data" style="margin-top: 10px;">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="titlePost"  autocomplete="off" style="color: #222222!important;"
                                                           placeholder="عنوان پست را وارد نمایید">
                                                </div>
                                                <div class="form-group">
                        <textarea class="form-control  ckeditor" name="content">

                        </textarea>
                                                </div>
                                                <div class="form-group">
                                                <div class="uploadfile">
                                                    <p style="color: #222222">عکسی را جهت نمایش در سایت آپلود نمایید .</p>
                                                    <center>
                     <span class="btn btn-danger btn-file"
                           style="margin: 5px 25px 14px 25px;border-radius: 0!important;">
                         انتخاب عکس<input type="file" name="file_upload">
                      </span>
                                                    </center>
                                                </div>
                                            </form>
                                            <button type="submit" name="btnPost" class="btn btn-primary btn-block mb-4">ارسال پست</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    </center>
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
