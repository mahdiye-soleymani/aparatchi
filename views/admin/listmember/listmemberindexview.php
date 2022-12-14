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

                    <div class="col-sm-10">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">لیست کاربران</h3>

                                <div class="card-tools">

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>شماره</th>
                                        <th>یوزر نیم</th>
                                        <th>ایمیل</th>
                                        <th>زمان ثبت نام</th>
                                        <th>عملیات</th>
                                    </tr>
                                    <?php
                                    if (!empty($aparatchi['membermodel']->listmember())) {
                                        foreach ($aparatchi['membermodel']->listmember() as $value) { ?>
                                            <tr>

                                                <td><?php echo $value->id; ?></td>
                                                <td><?php echo $value->username; ?></td>
                                                <td><?php echo $value->email; ?></td>
                                                <td><?php echo shamsi($value->register_time); ?></td>
                                                <td><a href="<?php echo AddressMyWebsite . 'update/memberEdit/'. $value->id; ?>"
                                                       class="badge badge-info text-white">ویرایش</a> | <a
                                                            href="<?php echo AddressMyWebsite . 'admindelete/deletemember/' . $value->id; ?>"
                                                            class="badge badge-danger text-white">حذف</a></td>
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

    </footer>
</div>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>