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
                                <h3 class="card-title">لیست دسته بندی ها </h3>

                                <div class="card-tools">

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <table class="table">
                                <thead>
                                <tr class="success">
                                    <th class="text-center">id</th>
                                    <th class="text-center"> نام دسته بندی به فارسی</th>
                                    <th class="text-center">نام دسته بندی به لاتین</th>
                                    <th class="text-center">حذف دسته بندی</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (!empty($list)) {
                                    foreach ($list as $value) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $value['id']; ?></td>
                                            <td class="text-center"> <?php echo $value['name']; ?></td>
                                            <td class="text-center"><?php echo $value['slug'] ?></td>
                                            <td class="text-center"><a
                                                        href="<?php echo 'dashbord.php?deleteCategory=' . $value['id'] ?>">حذف</a></td>
                                        </tr>
                                    <?php }
                                } else {
                                    echo '<div class="alert alert-danger" style="margin: 5px;">';
                                    echo 'دسته بندی وجود ندارد';
                                    echo '</div>';
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
