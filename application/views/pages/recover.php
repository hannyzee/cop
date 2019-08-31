<!DOCTYPE html>
<html>
<head>
	<title>Password Recovery</title>
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url('assets/images/background/login-register.jpg');?>;">        
            <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material"  action="<?php echo base_url('home');?>" method="POST">
                    <h3 class="box-title m-b-20">Recover Password</h3>
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <input class="form-control" type="Email" required="" placeholder="Enter Your Username or Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                        <input class="form-control" type="password"  required="" placeholder="Password" name="newpassword">
                      </div>
                    </div>
                     <div class="form-group">
                      <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder=" Confirm Password" name="confrimpassword">
                      </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" value="save" onclick="function();">Reset</button>
                      </div>
                    </div>
                  </form>
            </div>
          </div>
        </div>    
    </section>
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
    <script src="<?php echo base_url('assets/js/validation.min.js');?>"></script>
     <script>
    		function Function(){
    			var newpassword = document.getElementById('newpassword').value;
    			var confirmpassword = document.getElementById('confrimpassword').value;
    			if (newpassword == "" || confrimpassword == "") {
    				alert('password change sucessfully');
    			}

    			else   {
    				alert("password not matched");
    			}

    			

    		}
    </script>

    <!-- Style switcher -->
    <!-- ============================================================== -->
     <script src="<?php echo base_url('assets/plugins/styleswitcher/jQuery.style.switcher.js');?>"></script>
</body>
</html>