<?php 
 //$role = $this->session->userdata['role']; 
 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <title>Add User</title>
    <?php $this->load->view('admin/head'); ?>
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
</head>

<body>
   
    <!-- Start Left menu area -->
    <?php $this->load->view('admin/sidebar'); ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('admin/header'); ?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description1">Add Car Rent Agency</a></li>
                                
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                        
                                                        <?php echo form_open_multipart(); 
                                                        
                                                        ?>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <label style="font-size:16px;"> Username</label>
                                                                    <input type="email" name="email" class="form-control" placeholder="Enter your Email" value="<?php echo set_value('email'); ?>" required>
                                                                    <span></span>
                                                                </div>
                                                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <label style="font-size:16px;"> Password</label>
                                                                    <input type="password" name="password" class="form-control" placeholder="Enter your Password" value="<?php echo set_value('password'); ?>" required>
                                                                    <span></span>
                                                                </div>
                                                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <label style="font-size:16px;"> Mobile</label>
                                                                    <input type="number" name="mobile" class="form-control" placeholder="Enter your Mobile" value="<?php echo set_value('mobile'); ?>" required>
                                                                    
                                                                </div>
                                                                <span class="text-danger"><?php echo form_error('mobile'); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <label style="font-size:16px;"> Agency Name</label>
                                                                    <input type="text" name="agency_name" class="form-control" placeholder="Enter your Agency Name" value="<?php echo set_value('agency_name'); ?>" required>
                                                                    
                                                                </div>
                                                                <span class="text-danger"><?php echo form_error('agency_name'); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <label style="font-size:16px;"> Agency Address</label>
                                                                    <textarea name="agency_address" class="form-control"><?= set_value('agency_address');?></textarea>
                                                                    
                                                                </div>
                                                                <span class="text-danger"><?php echo form_error('agency_address'); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Register</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <?php $this->load->view('admin/footer'); ?>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>
    CKEDITOR.replace('summernote');
    </script>
    
</body>

</html>