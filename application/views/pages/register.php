<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register, AFMSCS</title>
    <?php $this->load->view('main/head');?>
</head>

<body>
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
     <div class="login-register" style="background-image:url(<?php echo base_url('assets/images/background/login-register.jpg');?>">
        <div class="login-box card">
            <div class="card-body">
                <h4 class="card-title">Sign Up</h4>
                <form  class="form-horizontal" id="loginform" action="">
                    <div class="form-group">
                        <label for="exampleInputuname">User Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ti-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="uname" id="uname" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ti-email"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="eemail" id="eemail" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd1">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ti-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="pwd1" id="pwd1" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd2">Confirm Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ti-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <div>Already have an account? <a href="login" class="text-info m-l-5"><b>Sign In</b></a></div>
                            </div>
                        </div>

                </form>
            </div>
        </div>
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