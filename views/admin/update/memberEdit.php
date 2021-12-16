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

                    <!--کد های کانتت ما-->
                    <div class="col-sm-8">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">ویرایش کاربران</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form  role="form" method="post" action="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <p>نام و نام خانوادگی</p>
                                        <input type="text" value="<?php echo $aparatchi['listmemberbyid']->info;?>" name="infoupdateregister" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <p>ایمیل کاربر</p>
                                        <input type="email" value="<?php echo $aparatchi['listmemberbyid']->email;?>" name="emailupdateregister" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <p>نام کاربری کاربر</p>
                                        <input type="text" name="usernameupdateregister" value="<?php echo $aparatchi['listmemberbyid']->username;?>" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group">
                                        <p>اگر مقدار را ۰ بگذارید کاربر میتواند وارد وبسایت شود در غیر این صورت اگر برابر ۱ قرار دهید امکان پذیر نیست و بن میشود</p>
                                        <input type="text" name="banmember" value="<?php echo $aparatchi['listmemberbyid']->status;?>" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <button name="btnupdatemember" class="btn btn-info btn-block">ویرایش کاربر</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--کد های کانتت ما-->
                </div>
            </div>
        </div>
    </div>


    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <!--        Anything you want-->
        </div>
        <!-- Default to the left -->
        <!--    <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">وبسایت زیکو</a>.</strong>-->
    </footer>
</div>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>



