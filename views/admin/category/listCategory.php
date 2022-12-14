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


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">منو های موجود </h3>

                                <div class="card-tools">

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <table class="table">
                                <thead>
                                <tr class="success">
                                    <th class="text-center">id</th>
                                    <th class="text-center">عنوان</th>
                                    <th class="text-center">id منو اصلی</th>
                                    <th class="text-center">نوع منو</th>
                                    <th class="text-center">حذف</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php
                                if (!empty($aparatchi['categorymodel']->listMenu())) {
                                    foreach ($aparatchi['categorymodel']->listMenu() as $value) { ?>
                                        <tr>
                                            <td><?php echo $value->id; ?></td>
                                            <td><?php echo $value->title; ?></td>
                                            <td><?php
                                                if (($value->menuid) == 0) {
                                                    echo "منو اصلی";
                                                } elseif (($value->menuid) != 0) {
                                                    echo $value->menuid;

                                                }
                                                ?>
                                            </td>
                                            <td><?php
                                                if (($value->status) == 1) {
                                                    echo "منو اصلی";
                                                } elseif (($value->status) == 100) {
                                                    echo "زیر منو ";
                                                }elseif (($value->status) == 0) {
                                                    echo "بدون زیرمنو";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                 <a
                                                        href="<?php
                                                        echo AddressMyWebsite . 'deleteMenu/deletemenu/' . $value->id;
                                                        ?>"
                                                        class="badge badge-danger text-white">حذف</a></td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo '<div class="alert alert-warning" style="margin: 15px 10px">موضوعی وجود ندارد</div>';
                                } ?>

                                </tbody>

                            </table>
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