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
                            <h1 class="color-white">Center for Education & Training</h1>
                            <p class="color-white-muted">There may be different tools/ methods/ mechanisms to achieve Quality. Accreditation is one such tool. In Healthcare, accreditation is now available almost for all types of organisations ranging from a medical laboratory to a super speciality hospital. 
    </p>
                            <!-- button --> 
                            <!-- <a href="#contact" class="dtr-btn btn-red dtr-scroll-link dtr-mt-30 dtr-mr-40">Book Now</a> 

                            <a class="dtr-video-popup dtr-text-btn dtr-btn-left-icon dtr-mt-30 color-red" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kuceVNBTJio"><i class="icon-play"></i> Watch The Video</a>  -->
                        </div>

                        <div class="col-12 col-md-6 small-device-space"> <img src="<?php echo base_url(); ?>front/assets/images/t1.jpg" alt="image" class="dtr-rounded-img dtr-mb-minus50"> </div>
                        <!-- column 2 ends --> 
                        
                    </div>
                    <!--===== row 1 ends =====--> 
                    
                </div>
            </div>
        </section>
        <!-- hero section ends
================================================== --> 
        
        <!-- features section starts
================================================== -->
        <section id="features" class="dtr-section dtr-pt-150 dtr-pb-100">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading text-center">
                    <h2>Our Services</h2>
                    <p>The Global Healthcare Accreditation (GHA) Program offers customized client services supporting the improvement efforts of healthcare</p>
                </div>
                <!-- heading ends --> 
                
                <!--== row starts ==-->
                <div class="row dtr-pt-10"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-3 dtr-img-feature"> <span class="dtr-img-feature-img"><span class="dtr-img-feature-circle bg-light-red"></span><i class="icon-clock2 color-blue"></i></span>
                        <h4 class="dtr-img-feature-heading">QAI </h4>
                        <p>Quality and Accreditation Institute</p>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-3 dtr-img-feature"> <span class="dtr-img-feature-img"><span class="dtr-img-feature-circle bg-light-red"></span><i class="icon-user-check1 color-blue"></i></span>
                        <h4 class="dtr-img-feature-heading">CTET </h4>
                        <p>Center for Education and Training </p>
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-md-3 dtr-img-feature"> <span class="dtr-img-feature-img"><span class="dtr-img-feature-circle bg-light-red"></span><i class="icon-thumbs-up2 color-blue"></i></span>
                        <h4 class="dtr-img-feature-heading">CLA </h4>
                        <p>Center for Laboratory Accreditation </p>
                    </div>
                    <div class="col-12 col-md-3 dtr-img-feature"> <span class="dtr-img-feature-img"><span class="dtr-img-feature-circle bg-light-red"></span><i class="icon-thumbs-up2 color-blue"></i></span>
                        <h4 class="dtr-img-feature-heading">CAHSC</h4>
                        <p>Center for Accreditation of Health and Social Care</p>
                    </div>
                    <!-- column 3 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- features section ends
================================================== --> 
        
        
        
        <!-- about section starts
================================================== -->
        <?php /*<section id="about" class="dtr-section dtr-pt-100 dtr-pb-150 dtr-section-with-bg" style="background-image: url(<?php echo base_url('front/assets/images/section-bg-img1.jpg') ?>);"> <!-- blue overlay -->
            <div class="dtr-overlay dtr-overlay-blue"></div>
            <div class="container dtr-overlay-content"> 
                
                <!-- row starts -->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6 col-lg-5">
                        <h2 class="color-white">We aim to help peoples</h2>
                        <p class="color-white-muted">We support governments and healthcare organizations, as well as partners and health care professionals to improve health care quality, patient safety and quality of service delivery worldwide.We provide accreditation and clinical excellence certification services helping healthcare organizations to manage their risks and improve patient focus care.</p>
                        
                        <!--== accordion starts ==-->
                        <div class="dtr-mt-30 color-white">
                            <div class="dtr-accordion accordion" id="accord-index1"> 
                                
                                <!-- accordion tab 1 starts -->
                                <div class="card">
                                    <div class="card-header" id="accord-index1-heading1">
                                        <h4>
                                            <button class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse1" aria-expanded="false" aria-controls="accord-index1-collapse1">We care for our customers and partners</button>
                                        </h4>
                                    </div>
                                    <!--<div id="accord-index1-collapse1" class="collapse" aria-labelledby="accord-index1-heading1" data-parent="#accord-index1">
                                        <div class="card-body">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</div>
                                    </div>-->
                                </div>
                                <!-- accordion tab 1 ends --> 
                                
                                <!-- accordion tab 2 starts -->
                                <div class="card">
                                    <div class="card-header" id="accord-index1-heading2">
                                        <h4>
                                            <button class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse2" aria-expanded="false" aria-controls="accord-index1-collapse2">We are passionate about delivering superb service</button>
                                        </h4>
                                    </div>
                                    <!--<div id="accord-index1-collapse2" class="collapse" aria-labelledby="accord-index1-heading2" data-parent="#accord-index1">
                                        <div class="card-body">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</div>
                                    </div>-->
                                </div>
                                <!-- accordion tab 2 ends --> 
                                
                                <!-- accordion tab 3 starts -->
                                <div class="card">
                                    <div class="card-header" id="accord-index1-heading3">
                                        <h4>
                                            <button class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse3" aria-expanded="false" aria-controls="accord-index1-collapse3">We expect everyone to take personal responsibility and perform to high standards</button>
                                        </h4>
                                    </div>
                                    <!--<div id="accord-index1-collapse3" class="collapse" aria-labelledby="accord-index1-heading3" data-parent="#accord-index1">
                                        <div class="card-body">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</div>
                                    </div>-->
                                </div>
                                <!-- accordion tab 3 ends --> 
                                 <div class="card">
                                    <div class="card-header" id="accord-index1-heading3">
                                        <h4>
                                            <button class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse" data-target="#accord-index1-collapse3" aria-expanded="false" aria-controls="accord-index1-collapse3">We set the highest professional and ethical standards at all times.</button>
                                        </h4>
                                    </div>
                                    <!--<div id="accord-index1-collapse3" class="collapse" aria-labelledby="accord-index1-heading3" data-parent="#accord-index1">
                                        <div class="card-body">Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <!--== accordion ends ==-->
                        
                        <p class="color-white-muted dtr-mt-40">"Delivering an outstanding patient/guest experience on a consistent basis is not something that can be improvised; it requires in-depth knowledge of your customers’ needs and expectations"</p>
                        
                        <!-- author box starts -->
                        <div class="dtr-author-box dtr-mt-20"> <img src="<?php echo base_url(); ?>front/assets/images/user-6.jpg" width="60" height="60" alt="image" class="dtr-author-img border-red">
                            <div class="dtr-author-content">
                                <h6 class="color-white">Melissa Norwood</h6>
                                <p class="color-white-muted">Co-founder</p>
                            </div>
								<!--<img src="assets/images/signature.png" alt="image" class="ml-auto">--> </div>
                        <!-- author box ends --> 
                        
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 col-lg-6 offset-lg-1 small-device-space"> <img src="<?php echo base_url() ?>front/assets/images/about-img.png" alt="image"> </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!-- row ends --> 
                
            </div>
        </section> */?>
        <!-- about section ends
================================================== --> 
        
        <!-- counter section starts
================================================== -->
        
        <!-- counter section ends
================================================== --> 
        
        
        <!-- testimonial section starts
================================================== -->
        <section class="dtr-section dtr-py-100 dtr-section-with-bg" style="background-image: url(<?php echo base_url('assets/images/section-bg-img2.jpg') ?>);"> <!-- blue overlay -->
            <div class="dtr-overlay dtr-overlay-blue"></div>
            <div class="container dtr-overlay-content"> 
                
                <!--===== row 1 starts =====-->
                <div class="row d-flex align-items-center"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6"> <img src="<?php echo base_url() ?>front/assets/images/testimonial-graphics.png" alt="image"> </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6">
                        <h2 class="color-white text-center">Glimpses</h2>
                        <div class="dtr-px-30 dtr-pt-20"> 
                            
                            <!--===== testimonial slider starts =====-->
                            <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots color-white"> 
                                
                                <!--== slide 1 starts ==-->
                                <?php foreach($gallery as $gal_data){ ?>
                                <div class="dtr-testimonial">
                                    <div class="dtr-testimonial-content clearfix"> 
                                        <!-- client info -->
                                        <div class="dtr-client-info clearfix">
                                            <div class="dtr-testimonial-user"><span class="dtr-testimonial-icon"></span> <img src="<?php echo base_url('uploads/'.$gal_data['image']); ?>" alt="image" style="width: 380px!important"> </div>
                                            <!-- <div class="dtr-testimonial-user-info">
                                                <h6 class="dtr-client-name">Chris Krammes</h6>
                                                <span class="dtr-client-job color-white-muted">CEO, Aione</span> </div> -->
                                        </div>
                                        
                                    </div>
                                </div>
                            <?php } ?>
                                <!--== slide 1 ends ==-->
                            </div>
                            <!--===== testimonial slider ends =====--> 
                        </div>
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!--===== row 1 ends =====--> 
                
            </div>
        </section>
        <!-- testimonial section ends
================================================== --> 
        
        <!-- service boxes section starts
================================================== -->
        <section id="advantage" class="dtr-pt-100 dtr-pb-70">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading text-center">
                    <h2>Information Center</h2>
                    <!-- <p>What does really make us different is our surveyors </p> -->
                </div>
                <!-- heading ends --> 
                
                <!--== row starts ==-->
                <div class="row"> 
                    <?php foreach($info as $info_center){ ?>
                    <!-- box 1 starts -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="dtr-servicebox"> <span class="dtr-servicebox-number"></span> <span class="dtr-servicebox-img color-blue"><i class="icon-users1"></i></span>
                            <h4><?php echo $info_center['title']; ?></h4>
                            <p><?php echo $info_center['description']; ?></p>
                        </div>
                    </div>
                    <!-- box 1 ends --> 
                    <?php } ?>
                    <!-- box 2 starts -->
                   <!--  <div class="col-12 col-sm-6 col-lg-4">
                        <div class="dtr-servicebox"> <span class="dtr-servicebox-number">2</span> <span class="dtr-servicebox-img color-blue"><i class="icon-feather1"></i></span>
                            <h4>Practical Solutions</h4>
                            <p>solution to a problem or difficult situation is a way of dealing with it.our experts use their extensive skills and work closely.</p>
                        </div>
                    </div> -->
                    <!-- box 2 ends --> 
                    
                    <!-- box 3 starts -->
                    <!-- <div class="col-12 col-sm-6 col-lg-4">
                        <div class="dtr-servicebox"> <span class="dtr-servicebox-number">3</span> <span class="dtr-servicebox-img color-blue"><i class="icon-watch"></i></span>
                            <h4>Flexible Work Hours</h4>
                            <p>flexible work arrangements are alternate arrangements or schedules from the traditional working.</p>
                        </div>
                    </div> -->
                    <!-- box 3 ends --> 
                    
                    <!-- box 4 starts -->
                    <!-- <div class="col-12 col-sm-6 col-lg-4 offset-lg-2">
                        <div class="dtr-servicebox"> <span class="dtr-servicebox-number">4</span> <span class="dtr-servicebox-img color-blue"><i class="icon-sun2"></i></span>
                            <h4>Innovative Approach</h4>
                            <p>Different approaches to business innovation.Business world becomes more globally integrated, the competitive.</p>
                        </div>
                    </div> -->
                    <!-- box 4 ends --> 
                    
                    <!-- box 5 starts -->
                    <!-- <div class="col-12 col-sm-6 col-lg-4">
                        <div class="dtr-servicebox"> <span class="dtr-servicebox-number">5</span> <span class="dtr-servicebox-img color-blue"><i class="icon-shield"></i></span>
                            <h4>Helpful Advice</h4>
                            <p>It’s important to be aware of your competition and either appropriate or improve upon their successful tactics.</p>
                        </div>
                    </div> -->
                    <!-- box 5 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- service boxes section ends
================================================== --> 
         
        
        <!-- blog section starts
================================================== -->
        <section id="blog" class="dtr-section dtr-py-100" style="background-color: #e9e9e9a6">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading text-center">
                    <h2>News</h2>
                </div>
                <!-- heading ends --> 
                
                <!--== row starts ==-->
                <div class="row dtr-mt-0"> 
                    <?php foreach($news as $news_data){ ?>
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4"> 
                        
                        <!-- blog item 1 starts -->
                        <div class="dtr-blog-item"> 
                            <!-- image -->
                            <div class="dtr-post-img"> <img src="<?php echo base_url() ?>front/assets/images/news.png" alt="image" style="width: 100%!important;height: 300px!important;"> <span class="dtr-blog-date"><?php $date = date_create($news_data['date_created']);echo date_format($date,'d m'); ?> <br>
                                <?php echo date_format($date,'Y'); ?></span> </div>
                            <!-- content -->
                            <h5><?php echo $news_data['title']; ?></h5>
                            <p style="text-align:left"><?php echo $news_data['description']; ?></p>
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
        <section id="features" class="dtr-section dtr-pt-150 dtr-pb-100">
            <div class="container"> 
                
                <!-- heading starts -->
                <div class="dtr-styled-heading text-center">
                    <h2>Our Global Associate</h2>
                    
                </div>
                <!-- heading ends --> 
                
                <!--== row starts ==-->
                <div class="row dtr-pt-10"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-3 dtr-img-feature"> <span class="dtr-img-feature-img"><i class=""></i></span>
                        <img src="<?php echo base_url() ?>front/assets/images/t5.jpg" alt="logo">
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-3 dtr-img-feature"> <span class="dtr-img-feature-img"><i class=""></i></span>
                        <img src="<?php echo base_url() ?>front/assets/images/t6.jpg" alt="logo">
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-md-3 dtr-img-feature"> <span class="dtr-img-feature-img"><i class=""></i></span>
                        <img src="<?php echo base_url() ?>front/assets/images/t7.jpg" alt="logo">
                    </div>
                    <div class="col-12 col-md-3 dtr-img-feature"> <span class="dtr-img-feature-img"><i class=""></i></span>
                        <img src="<?php echo base_url() ?>front/assets/images/t8.jpg" alt="logo">
                    </div>
                    <!-- column 3 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
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