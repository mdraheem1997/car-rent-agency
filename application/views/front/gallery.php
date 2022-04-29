<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('front/head'); ?>
</head>
<body>
<div id="dtr-wrapper" class="clearfix"> 
    
    <!-- preloader starts -->
    <div class="dtr-preloader">
        <div class="dtr-preloader-inner">
            <div class="dtr-loader">Loading...</div>
        </div>
    </div>

    <!-- preloader ends --> 
    
    <!-- Small Devices Header 
============================================= -->
    <div class="dtr-responsive-header fixed-top">
        <div class="container"> 
            
            <!-- small devices logo --> 
            <a href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="logo"></a> 
            <!-- small devices logo ends --> 
            
            <!-- menu button -->
            <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button> 
        </div>
        <div class="dtr-responsive-header-menu"></div>
    </div> 
    <!-- Small Devices Header ends 
============================================= --> 
    
    <!-- Header 
============================================= -->
    <?php $this->load->view('front/header'); ?>
    <!-- header ends
================================================== --> 
    
    <!-- == main content area starts == -->
    <div id="dtr-main-content"> 
        
        <!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section dtr-section-with-bg dtr-hero-section-top-padding bg-blue" style="background-image: url(assets/images/white-shape-bg.png);"> 
            
            <!-- wrapping div for background bottom curve stripes image - easy to change color - no need to edit image - refer help doc -->
            <div class="dtr-bottom-shape-img" style="background-image: url(<?php echo base_url('assets/images/hero-bottom.svg') ?>);">
                <div class="container"> 
                    
                    <!--===== row 1 starts =====-->
                    <div class="row"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6"> 
                            
                            <!-- intro text -->
                            <h1 class="color-white">People Powered Health</h1>
                            <p class="color-white-muted">The GHA program complements existing national and international clinical accreditation programs.</p>
                            <!-- button --> 
                            <!-- <a href="#contact" class="dtr-btn btn-red dtr-scroll-link dtr-mt-30 dtr-mr-40">Book Now</a> 

                            <a class="dtr-video-popup dtr-text-btn dtr-btn-left-icon dtr-mt-30 color-red" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"><i class="icon-play"></i> Watch The Video</a>  -->
                        </div>

                        <div class="col-12 col-md-6 small-device-space"> <img src="<?php echo base_url(); ?>front/assets/images/research-and-evidence.jpg" alt="image" class="dtr-rounded-img dtr-mb-minus50"> </div>
                        <!-- column 2 ends --> 
                        
                    </div>
                    <!--===== row 1 ends =====--> 
                    
                </div>
            </div>
        </section>
        <!-- hero section ends
================================================== -->  
         
        
        
        <!-- testimonial section starts
================================================== -->
        
        <!-- testimonial section ends
================================================== --> 
        
        <!-- service boxes section starts
================================================== -->
       
        <!-- service boxes section ends
================================================== --> 
        
        <!-- cta section starts
================================================== -->
        
        <!-- cta section ends
================================================== --> 
        
        <!-- blog section starts
================================================== -->
        <section id="blog" class="dtr-section dtr-py-100">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading text-center">
                    <h2>Gallery</h2>
                </div>
                <!-- heading ends --> 
                
                <!--== row starts ==-->
                <div class="row dtr-mt-0"> 
                  <?php foreach($gallery as $row){ ?>
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4"> 
                        
                        <!-- blog item 1 starts -->
                        <div class="dtr-blog-item"> 
                            <!-- image -->
                            <img src="<?php echo base_url('uploads/'.$row['image']); ?>">
                            <!-- content -->
                           <!--  <h5>hello</h5> -->
                            <!-- <p style="text-align:left"><?php echo $page['description'] ?></p> -->
                            <ul class="dtr-blog-meta color-grey">
                               <!-- <li class="dtr-blog-author"><a href="#">Trevor</a></li>
                                <li class="dtr-blog-category"><a href="#">bookkeeping</a></li>-->
                            </ul>
                        </div>
                        <!-- blog item 1 ends --> 
                        
                    </div>
                <?php } ?>
                    <!-- column 1 ends --> 
                </div>
                <!--== row starts ==--> 
                
            </div>
        </section>
        <!-- blog section ends
================================================== --> 
        
        <!-- contact section starts
================================================== --> 
        <!-- top background curve image - easy to change color / no need to edit image - refer help doc -->
       
        <!-- contact section ends
================================================== --> 
        
        <!-- footer section starts
================================================== -->
        <?php $this->load->view('front/footer'); ?>
        <!-- footer section ends
================================================== --> 
        
    </div>
    <!-- == main content area ends == --> 
    
</div>
<!-- #dtr-wrapper ends --> 

<!-- JS FILES --> 

</body>
</html>