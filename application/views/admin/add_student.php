<?php $this->load->view('admin/sidebar'); ?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
   
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
           
            <ul>
              <li><h3>Home</h3></li>
                <li>
                    <a href="index.html">Students</a>
                </li>
                <li>Add Student </li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Students</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <form class="new-added-form" method="POST" action="<?php echo base_url() ?>student/add_student">
                    <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Roll</label>
                            <input type="text" name="roll" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Student Name *</label>
                            <input type="text" name="name" placeholder="" class="form-control">
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Gender *</label>
                            <select class="select2" name="gender">
                                <option value="">Please Select Gender *</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Date Of Birth *</label>
                            <input type="date" placeholder="dd/mm/yyyy" name="dob" class="form-control "
                                data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Religion *</label>
                            <input type="text" name="religion" placeholder="" class="form-control">
                        </div>
                        
                        
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Class</label>
                            <input type="text" name="class" placeholder="" class="form-control">
                        </div>
                       
                        
                        
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="" class="form-control">
                        </div>
                        
                        
                        <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"
                                name="btn_save" value="submit">Save</button>
                                <a class=" btn btn-primary" href="<?php echo base_url() ?>student" role="button"
                                style="padding: 10px 30px 9px 30px;font-size:20px">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Admit Form Area End Here -->

    </div>

<?php $this->load->view('admin/footer'); ?>