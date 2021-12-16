<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/header.php'; ?>
<div class="wrapper">
    <!-- Navbar -->
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/nav.php'; ?>.
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/slider.php'; ?>

    <!-- Content Wrapper. Contains page content -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <br/>
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <!--کدهای خودمان را قرار میدهیم-->

                    <div class="col-sm-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">لیست لاگ ورودی ها به وبسایت</h3>

                                <div class="card-tools">

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>شماره</th>
                                        <th>ایمیل</th>
                                        <th>ایپی</th>
                                        <th>زمان</th>
                                    </tr>
                                    <?php
                                    if (!empty($aparatchi['membermodel']->listlog())) {
                                        foreach ($aparatchi['membermodel']->listlog() as $value) { ?>
                                            <tr>
                                                <td><?php echo $value->id; ?></td>
                                                <td><?php echo $value->email; ?></td>
                                                <td><?php echo $value->ip; ?></td>
                                                <td><?php echo shamsi($value->time); ?></td>
                                            </tr>
                                        <?php }
                                    } else {
                                        echo '<div class="alert alert-warning" style="margin: 15px 10px">کاربری در وبسایت ثبت نام نکرده است</div>';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
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
        <!-- Default to the left -->
        <!--    <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">وبسایت زیکو</a>.</strong>-->
    </footer>
</div>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>
