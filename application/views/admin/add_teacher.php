<?php $this->load->view('admin/sidebar'); ?>
<script>
$(document).ready(function() {
    $("#air-datepicker").air - datepicker({
        format: 'dd-mm-yy'
    });
})
</script>
<div class="dashboard-content-one">

    <div class="dashboard-content-one">
        <div class="breadcrumbs-area">

            <ul>
                <li>
                    <h3>Home</h3>
                </li>
                <li>
                    <a href="index.html">Teacher</a>
                </li>
                <li>Add Teacher </li>
            </ul>
        </div>

        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Teacher</h3>
                    </div>

                </div>
                <form class="new-added-form" method="POST" action="<?php echo base_url() ?>teachers/add_teacher"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>ID No</label>
                            <input type="text" name="id_no" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label> Name *</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Gender *</label>
                            <select class="select2" name="gender">
                                <option value="">Please Select Gender *</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Date Of Birth *</label>
                            <input type="date" placeholder="dd/mm/yyyy" name="dob" class="form-control ">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>E-Mail</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Address</label>
                            <input type="text" placeholder="" name="address" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Pin-Code</label>
                            <input type="text" placeholder="" name="pin_code" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Phone</label>
                            <input type="text" placeholder="" name="phone" class="form-control">
                        </div>

                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"
                                name="btn_save" value="save">Save</button>
                            <a class=" btn btn-primary" href="<?php echo base_url() ?>teachers" role="button"
                                style="padding: 10px 30px 9px 30px;font-size:20px">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <?php $this->load->view('admin/footer'); ?>