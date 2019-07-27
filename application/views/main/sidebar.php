 <div class="scroll-sidebar">
               <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" /> 
                             <!-- this is blinking heartbit-->
                            <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text"> 
                            <h5>Markarn Doe</h5>
                            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                             <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                            <a href="<?php echo base_url('auth/logout');?>" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>

                        <div class="dropdown-menu animated flipInY">
                        <!-- text--> 
                        <a href="<?php echo base_url();?>" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->  
                        <a href="<?php echo base_url();?>" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->  
                        <a href="<?php echo base_url();?>" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text--> 
                        <div class="dropdown-divider"></div>
                        <!-- text-->  
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text--> 
                        <div class="dropdown-divider"></div>
                        <!-- text-->  
                        <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->  
                        </div>
                    </div>
                </div>

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class=" waves-effect waves-dark" href="<?php echo base_url('home/index');?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-wallet"></i><span class="hide-menu">Accounts Mangement</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('account/account_type');?>">Create Account</a></li>
                                 <li><a href="<?php echo base_url('home/open_account');?>">Open Account</a></li>
                                <li><a href="<?php echo base_url('account/manage');?>">Manage Account</a></li>
                                <li><a href="<?php echo base_url('home/balance');?>">Statement Of Account</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-dollar"></i><span class="hide-menu">Transaction</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('home/deposits');?>">Deposit</a></li>
                                <li><a href="<?php echo base_url('home/withdraw');?>">Withdrawals</a></li>
                            </ul>
                        </li>
                         <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-dollar"></i><span class="hide-menu">Loans</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('home/loans');?>">Apply for Loans</a></li>
                                <li><a href="<?php echo base_url('loan/request');?>">View Loan Request</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Contributions</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('home/contribute');?>">New contribution</a></li>
                                <li><a href="<?php echo base_url('home/contribution_status');?>">Status</a></li>   
                            </ul>
                        </li>
                         <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-user"></i><span class="hide-menu">User Mangement</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('register');?>">Register New User</a></li>
                                <li><a href="<?php echo base_url('home/contacts');?>">Contact</a></li>
                                <li><a href="<?php echo base_url('home/profile');?>">Mange User</a></li>
                                
                            </ul>
                        </li>
                          <li> <a class="waves-effect waves-dark" href="<?php echo base_url('reports/report');?>" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Generate Report</a>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>