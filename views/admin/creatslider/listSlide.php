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
                                <h3 class="card-title">لیست اسلاید ها</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="success">
                                        <th class="text-center">ایدی</th>
                                        <th class="text-center"> نام </th>
                                        <th class="text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    if (!empty($aparatchi['sliderModel']->listSlider())) {
                                        foreach ($aparatchi['sliderModel']->listSlider() as $value) {?>
                                            <tr>
                                                <td class="text-center"><?php echo $value['id']; ?></td>
                                                <td class="text-center"><?php echo $value['slidename']; ?></td>
                                                <td class="text-center">
                                                    <a href="<?php echo AddressMyWebsite.'deleteSlide/deleteSLider/' . $value['id']; ?>">حذف</a></td>
                                            </tr>
                                        <?php }
                                    } else {

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
    </footer>
</div>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . '../common/footer.php'; ?>
