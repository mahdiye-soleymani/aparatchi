<?php
if (!isset($_SESSION['wellcom_to_adminindex'])) {
    // اگرمدیر لاگین نکرده باشد به صفحه لاگین برود
    header('location:adminlogin');
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo AddressMyWebsite . 'public/admin/' ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                    <img src="<?php echo AddressMyWebsite;?>/public/admin/dist/img/avatar2.png"
                                         class="img-circle elevation-2" alt="User Image">
                                </div>
                <div class="info">
                    <a href="#" class="d-block text-white">مدیر سایت : مهدیه سلیمانی</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo AddressMyWebsite; ?>adminlistmember" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo AddressMyWebsite; ?>adminloglist" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لاگ کاربران</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                تنظیمات وبسایت
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo AddressMyWebsite; ?>adminchangepass" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تغییر پسورد</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo AddressMyWebsite; ?>adminexit" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>خروج از پنل مدیریت</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>