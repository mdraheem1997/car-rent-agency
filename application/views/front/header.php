<?php  ?>
<header id="dtr-header-global" class="fixed-top trans-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between"> 
                
                <!-- header left starts -->
                <div class="dtr-header-left"> 
                    
                    <!-- logo --> 
                    <!--<a class="logo-default dtr-scroll-link" href="#home"><img src="assets/images/logo-light.png" alt="logo"></a> 
                    
                    <!-- logo on scroll --> 
                   <!-- <a class="logo-alt dtr-scroll-link" href="#home"><img src="assets/images/logo-dark.png" alt="logo"></a> 
                    <!-- logo on scroll ends --> 
                    
                </div>
                <!-- header left ends --> 
                
                <!-- menu starts-->
                <div class="dtr-header-right ml-auto">
                    <div class="main-navigation dtr-menu-light">
                        <ul class="sf-menu dtr-scrollspy dtr-nav light-nav-on-load dark-nav-on-scroll">
                            <!-- <li> <a class="nav-link" href="#">Home</a> </li>
							<li> <a class="nav-link" href="#">About</a> </li> -->
                            <?php foreach($menu as $parent_menu){ ?>
                            <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo $parent_menu['url_key'] ?>" data-bs-toggle="">  <?php echo $parent_menu['title']; ?>  
            <?php 
    $sql1 = $this->db->order_by('order_no','ASC')->get_where('tbl_menu',['status'=>'1','parent_id'=>$parent_menu['id']])->result_array();
    if(count($sql1)>0){
             ?>
            <i class="fa fa-caret-down"></i>
          <?php } ?>
          </a>
          <?php if(count($sql1)>0){ ?>
            <ul class="dropdown-menu" style="width: auto!important;">
              <!-- <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li> -->
              <?php 
    //echo $this->db->last_query();

              foreach($sql1 as $child_menu){

                    $sql2 = $this->db->order_by('order_no','ASC')->get_where('tbl_menu',['status'=>'1','parent_id'=>$child_menu['id']])->result_array();
               ?>
              <li><a class="dropdown-item" href="<?php echo base_url($child_menu['url_key']); ?>"> <?php echo $child_menu['title']; ?> <?php if(count($sql2)>0){ ?>&raquo;<?php } ?> </a>
                <?php if(count($sql2)>0){ ?>
                 <ul class="submenu dropdown-menu" style="width: auto!important;">
                   <!--  <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                    <li><a class="dropdown-item" href="#">Submenu item 2</a></li> -->
                    <?php 
                    foreach($sql2 as $sub_child){
                     ?>
                    
                    <li><a class="dropdown-item" href="#"><?php echo $sub_child['title']; ?> &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <?php 
                    $sql3 = $this->db->order_by('order_no','ASC')->get_where('tbl_menu',['status'=>'1','parent_id'=>$sub_child['id']])->result_array();
                    foreach($sql3 as $grand_sub_child){
                     ?>
                            <li><a class="dropdown-item" href="#"><?php echo $grand_sub_child['title'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
                    <!-- <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                    <li><a class="dropdown-item" href="#">Submenu item 5</a></li> -->
                 </ul>
               <?php } ?>
              </li>
          <?php } ?>
              <!-- <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
              <li><a class="dropdown-item" href="#"> Dropdown item 4 </a> -->
            </ul>
          <?php } ?>
        </li>
    <?php } ?>
                           <!--  <li> <a class="nav-link" href="#">Assessment Programs</a> </li> -->
                            
                             
                           <!--  <li> <a class="nav-link" href="#">Training & Workshops</a> </li>
							<li> <a class="nav-link" href="#">Blog</a> </li>
                            <li> <a class="nav-link" href="#">Contact</a> </li> -->
                           
                            
                        </ul> 
                        

                    </div>
                </div>

                <!-- menu ends --> 
                
                <!-- header button starts --> 
                <!-- <a href="#" class="dtr-btn btn-red dtr-btn-right-icon dtr-scroll-link dtr-ml-30">9999999999 <i class="icon-phone-call"></i></a>  -->
                <!-- header button ends --> 
                
            </div>
        </div>
    </header>