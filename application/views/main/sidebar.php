 <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url('assets/images/users/profile.png');?>" alt="user" />
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
                                <li><a href="<?php echo base_url('home/open_account');?>">Create Account</a></li>
                                 <li><a href="<?php echo base_url('home/open_account');?>">Open Account</a></li>
                                <li><a href="<?php echo base_url('home/manages');?>">Manage Account</a></li>
                                <li><a href="<?php echo base_url('home/balance');?>">Statement Of Account</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-dollar"></i><span class="hide-menu">Transaction Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('home/loans');?>">Apply for Loans</a></li>
                                <li><a href="<?php echo base_url('home/deposits');?>">Deposit</a></li>
                                <li><a href="<?php echo base_url('home/withdraw');?>">Withdrawals</a></li>
                                <li><a href="<?php echo base_url('home/request');?>">View Loan Request</a></li>
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
                                <li><a href="<?php echo base_url('home/sign_up');?>">Register New User</a></li>
                                <li><a href="<?php echo base_url('home/contacts');?>">Contact</a></li>
                                <li><a href="<?php echo base_url('');?>">Mange User</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>