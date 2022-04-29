<?php 
 //$role = $this->session->userdata['role']; 
 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <title>Edit Car</title>
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
                                <li class="active"><a href="#description1">Edit Car</a></li>
                                
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                        
                                                    <?php echo form_open_multipart(base_url('admin/Cars/update_car'));
                                                    ?>
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label style="font-size:16px;"> Vehicle Model</label>
                                                                <input type="hidden" name="hidden_id" value="<?php echo $users['id']; ?>">
                                                                <input type="text" name="vehicle_model" class="form-control" placeholder="Enter your Vehicle Model" value="<?php echo $users['vehicle_model']; ?>" required>
                                                                <span></span>
                                                            </div>
                                                            <span class="text-danger"><?php echo form_error('vehicle_model'); ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label style="font-size:16px;"> Vehicle Number</label>
                                                                <input type="text" name="vehicle_number" class="form-control" placeholder="Enter your Vehicle Number" value="<?php echo $users['vehicle_number']; ?>" required>
                                                                <span></span>
                                                            </div>
                                                            <span class="text-danger"><?php echo form_error('vehicle_number'); ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label style="font-size:16px;"> Seating Capacity</label>
                                                                <input type="number" name="seating_capacity" class="form-control" placeholder="Enter your Seating Capacity" value="<?php echo $users['seating_capacity']; ?>" required>
                                                                
                                                            </div>
                                                            <span class="text-danger"><?php echo form_error('seating_capacity'); ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label style="font-size:16px;"> Rent Per Day</label>
                                                                <input type="text" name="rent_per_day" class="form-control" placeholder="Enter Rent Per Day" value="<?php echo $users['rent_per_day']; ?>" required>
                                                                
                                                            </div>
                                                            <span class="text-danger"><?php echo form_error('rent_per_day'); ?></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Save</button>
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