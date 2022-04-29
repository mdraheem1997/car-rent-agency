<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php $this->load->view('admin/head');?>
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
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Users</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="date" data-editable="false">S.No.</th>
                                                <th data-field="Title" data-editable="false">Name</th>
                                                <th data-field="email" data-editable="false">Email</th>
                                                <th data-field="mobile" data-editable="false">Mobile</th>
                                                <th data-field="Type" data-editable="false">Role</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=0;
                                            foreach($user as $row){
                                                $i++
                                             ?>
                                            <tr>
                                                <td></td>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo ucfirst($row['firstname']." ".$row['lastname']); ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['mobile']; ?></td>
                                                <td><?php echo $row['role']; ?></td>
                                                <td class="datatable-ct"><a href="<?php echo base_url('edit-user/'.base64_encode($row['id'])); ?>" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('admin/Users/delete_user/'.base64_encode($row['id'])); ?>" onclick="return confirm('Are you sure ?');" class="btn btn-sm"><i class="fa fa-trash"></i></a>
                                                
                                                </td>
                                            </tr>
                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <?php $this->load->view('admin/footer'); ?>
    </div>

   
</body>

</html>