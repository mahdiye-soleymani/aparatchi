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
                                <h3 class="card-title">لیست کامنت ها</h3>

                                <div class="card-tools">

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>شماره</th>
                                        <th> عنوان پست</th>
                                        <th> ایمیل کاربر</th>
                                        <th>متن نظر</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    <?php
                                    if (!empty($aparatchi['listCommentsModel']->listComments())) {
                                        foreach ($aparatchi['listCommentsModel']->listComments() as $value) { ?>
                                            <tr>

                                                <td><?php echo $value->id; ?></td>
                                                <td><?php echo $value->title; ?></td>
                                                <td><?php echo $value->info; ?></td>
                                                <td><?php echo $value->content; ?></td>
                                                <td><?php
                                                   if($value->permission==0) {
                                                       echo "در انتظار تایید";

                                                }else
                                                    echo "تایید شده";
                                                ?></td>

                                                <td>
                                                    <?php
                                                   if($value->permission==0) {?>
                                                    <a href="<?php echo AddressMyWebsite . 'updateComments/updateComments/'. $value->id; ?>"
                                                       class="badge badge-info text-white">تایید</a>|
                                                        <?php
                                                   } ?>
                                                         <a
                                                        href="<?php echo AddressMyWebsite . 'deleteComments/deleteComments/' . $value->id; ?>"
                                                        class="badge badge-danger text-white">حذف</a></td>
                                            </tr>
                                        <?php }
                                    } else {
                                        echo '<div class="alert alert-warning" style="margin: 15px 10px">اخباری موجود نیست.</div>';
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
