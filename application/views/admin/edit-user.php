<!doctype html>
<html class="no-js" lang="en">

<head>
   <title>Edit User</title>
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
                                <li class="active"><a href="#description1">Add User</a></li>
                                
                            </ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description1">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div id="dropzone1" class="pro-ad addcoursepro">
                    
                            <?php echo form_open_multipart(base_url('admin/Users/update_user')); 
                            
                            ?>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;"> Username</label>
                                         <input type="hidden" name="hidden_id" value="<?php echo $users['id']; ?>">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your Email" value="<?php echo $users['email']; ?>" required>
                                        <span></span>
                                    </div>
                                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;"> Mobile</label>
                                        <input type="number" name="mobile" class="form-control" placeholder="Enter your Mobile" value="<?php echo $users['mobile']; ?>" required>
                                        
                                    </div>
                                    <span class="text-danger"><?php echo form_error('mobile'); ?></span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;"> Firstname</label>
                                        <input type="text" name="firstname" class="form-control" placeholder="Enter your Firstname" value="<?php echo $users['firstname']; ?>" required>
                                        
                                    </div>
                                    <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;"> Lastname</label>
                                        <input type="text" name="lastname" class="form-control" placeholder="Enter your Lastname" value="<?php echo $users['lastname']; ?>" required>
                                        
                                    </div>
                                    <span class="text-danger"><?php echo form_error('lastname'); ?></span>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;"> Role</label>
                                        <select class="form-control" required name="role">
                                            <option value="">-Select Role-</option>
                                            <option value="Agent" <?php if($users['role']=="Agent"){ echo "selected";} ?>>Agent</option>
                                            <option value="Sub Admin" <?php if($users['role']=="Sub Admin"){ echo "selected";} ?>>Sub Admin</option>
                                            <option value="User" <?php if($users['role']=="User"){ echo "selected";} ?>>User</option>
                                            <!-- <option value="Webinar/Training">Webinar/Training</option> -->
                                        </select>
                                    </div>
                                    <span class="text-danger"><?php echo form_error('role'); ?></span>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                         <label style="font-size:16px;"> Profile Picture</label>
                                        <input type="file" name="profile_pic" class="form-control">

                                        
                                    </div>
                                    <span class="text-danger"><?php  echo @$error; ?></span>
                                    <span class="text-danger"><?php echo $this->session->flashdata('msg'); ?></span>
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-line">
                                        <label>Active</label>
                                         <label class="switch">
                                            <input type="checkbox" <?php if($users['status']==1){ echo "checked";} ?> name="status" value="1">
                                            <span class="slider round"></span>
                                            
                                        </label>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-line">
                                        <label>InActive</label>
                                         <label class="switch">
                                            <input type="checkbox" <?php if($users['status']==0){ echo "checked";} ?> name="status"  value="0">
                                            <span class="slider round"></span>
                                            
                                        </label>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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