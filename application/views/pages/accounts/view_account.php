
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account Types Detail</title>
   <?php $this->load->view('main/head');?>
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <?php $this->load->view('main/header');?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <?php $this->load->view('main/sidebar');?>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Create Account</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Form Layout</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form" method="post"  >
                                    <div class="form-group m-t-40 row">
                                        <div class="col-md-10">
                                            <input class="form-control" type="hidden" name="acctid">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-md-2 col-form-label">Account Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="<?php echo $accts->acctname ?>" readonly >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-md-2 col-form-label">Minimum Balance</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="<?php echo $accts->minbalance; ?>"readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">fixed Charge</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="<?php echo $accts->fixcharge; ?>" id="" name="fixcharge" readonly>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Type Discription</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="<?php echo $accts->dicrip ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-md-2 col-form-label">Date</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="date" name="datecreated" id="" value="<?php echo $accts->datecreated; ?>" readonly>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="example-month-input" class="col-md-2 col-form-label">Created By</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="<?php echo  $_SESSION["userid"];?>" readonly >
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <a href="<?php echo base_url('account/update_acct');?>" class="btn btn-info"><i class="fa fa-pencil"></i>Edit</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2017 Admin Press Admin by themedesigner.in
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/js/waves.js');?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/js/sidebarmenu.js');?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/js/custom.min.js');?>"></script>
    <!-- Style switcher -->
    <!-- ============================================================== -->
     <script src="<?php echo base_url('assets/plugins/styleswitcher/jQuery.style.switcher.js');?>"></script>
</body>

</html>