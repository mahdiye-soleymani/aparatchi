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
                    <div class="col-sm-6">
                        <div class="card card-dark ">
                            <div class="card-header">
                                <h3 class="card-title">افزودن منو اصلی</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0 form_register">
                                <form id="form_addcategory" method="post" style="margin-top: 20px;" action="">
                                    <div class="col-sm-8 col-sm-offset-2"
                                         style="background-color: #fff!important;padding: 10px;">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="titleMenu"
                                                   placeholder="عنوان منو را وارد نمایید">
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">انتخاب نوع منو</label>
                                            <select name="menuOption" class="form-control" id="sel1">
                                                <option value="0">منو ساده</option>
                                                <option value="1">زیر منو دار</option>
                                            </select>
                                        </div>

                                        <button class="btn btn-primary btn-block" name="btnNewMenu">افزودن</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="card-title ">افزودن زیر منو</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0 form_register">
                                <form id="form_addcategory" method="post" style="margin-top: 20px;" action="">
                                    <div class="col-sm-8 col-sm-offset-2"
                                         style="background-color: #fff!important;padding: 10px;">
                                        <div class="form-group">
                                            <input type="text" class="form-control" autocomplete="off" name="titleSubMenu"
                                                   placeholder="عنوان زیر منو را وارد نمایید">
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">زیر منو کدام دسته بندی باشد</label>
                                            <select name="menuOptionForSub" class="form-control" id="sel1">
                                                <?php foreach ($aparatchi['listCategory']as $value){?>
                                                <option value="<?php echo $value['id'];?>"><?php echo $value['title'];?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary btn-block" name="btnNewSubMenu">افزودن</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->

                        </div>

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
