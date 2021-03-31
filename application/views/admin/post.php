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

                       
                    </div>
                </div>
                <form class="new-added-form" method="POST" action="<?php echo base_url() ?>student/add_student">
                    <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Code</label>
                            <input type="text" name="roll" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Title</label>
                            <input type="text" name="name" placeholder="" class="form-control">
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Category </label>
                            <select class="select2" name="Category">
                                <option value="">Please Select Category</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Date</label> 
                            <input type="date" placeholder="dd/mm/yyyy" name="date" class="form-control "
                                data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
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