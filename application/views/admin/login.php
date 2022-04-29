<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('admin/head'); ?>
    
</head>

<body>
   
    <!-- Start Left menu area -->
    
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description1">Login</a></li>
                                
                            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description1">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div id="dropzone1" class="pro-ad addcoursepro">
                                <a href="<?php echo base_url('avaliable-cars');?>" class="btn btn-primary pull-right ml-5">Rent Car</a>
                            <?php echo form_open_multipart(); 
                            
                            ?>
                        <div class="row clearfix">
                            
                            
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;"> Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter your Email" value="<?php echo set_value('email'); ?>" required>
                                        
                                    </div>
                                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter your Password" value="<?php echo set_value('password'); ?>" required>
                                        
                                    </div>
                                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                                </div>
                            </div>
                             <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;"> Role</label>
                                        <select class="form-control" name="role" id="role" required>
                                            <option value="">-Select Role-</option>
                                            <option value="Customer">Customer</option>
                                            <option value="Car Rent Agency">Car Rent Agency</option>
                                            
                                        </select>
                                        <span></span>
                                    </div>
                                    <span class="text-danger"><?php echo form_error('role'); ?></span>
                                </div>
                            </div>
                            
                            <div class="col-sm-12" style="margin-top: 10px;">
                                <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Login</button>
                                <a href="<?php echo base_url('register');?>" class="btn btn-sm btn-danger">Register as Customer</a>
                                <a href="<?php echo base_url('agency-register');?>" class="btn btn-sm btn-danger">Register as Car Agency</a><br>
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
    
</body>

</html>