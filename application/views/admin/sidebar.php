<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                       <?php if($this->session->userdata('login_status')=='login'){ ?>
                        <li>
                            <a class="" href="<?php echo base_url('avaliable-cars'); ?>" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Rent Car</span></a>
                            
                        </li>
                    <?php if($this->session->userdata('login_status')=="login" && $this->session->userdata('role')=="Car Rent Agency") { ?>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Cars</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                               
                                <li><a title="All Menus" href="<?php echo base_url('booked-cars'); ?>"><span class="mini-sub-pro">All Booked Cars</span></a></li> 
                                <li><a title="All Menus" href="<?php echo base_url('cars'); ?>"><span class="mini-sub-pro">All Cars</span></a></li>
                                
                                <li><a title="Create Ticket" href="<?php echo base_url('add-cars'); ?>"><span class="mini-sub-pro">Add New Car</span></a></li>
                                
                            </ul>
                        </li>
                        <?php } 
                        //if($this->session->userdata('role')=='Sub Admin'){ ?>
                        <li>
                            <a class="" href="<?php echo base_url('admin/Login/logout'); ?>"><span class="educate-icon educate-department"></span> <span class="">Logout</span></a>
                            
                        </li>
                    <?php } ?>
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>