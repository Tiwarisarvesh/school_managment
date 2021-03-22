<?php $this->load->view('admin/sidebar'); ?>
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">

            <ul>
                <li>
                    <h3>Home</h3>
                </li>
                <li>
                    <a href="index.html">Students</a>
                </li>
                <li>Update Class </li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Admit Form Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Update Class</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">...</a>


                    </div>
                </div>
                <form class="new-added-form" method="POST" action="<?php echo base_url() ?>class_s/update_class">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Class</label>
                            <input type="text" name="class" placeholder="" class="form-control"
                                value="<?php echo $data['class_name']; ?>">
                        </div>
                        <div class="form form-check-inline">
                            <input class="form-check-input" type="radio" name="radio" value="<?php echo $data['active']; ?>">
                            <label class="form-check-label" for="inlineRadio1">Active</label>
                        </div>
                        <div class="form form-check-inline">
                            <input class="form-check-input" type="radio" name="radio" value="<?php echo $data['active']; ?>">
                            <label class="form-check-label" for="inlineRadio2">Block</label>
                        </div>

                        <?php echo form_hidden('id', set_value('id', $data['id'])); ?>

                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"
                                name="btn_save" value="submit">Save</button>
                            <a class=" btn btn-primary" href="<?php echo base_url() ?>class_s" role="button"
                                style="padding: 10px 30px 9px 30px;font-size:20px">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Admit Form Area End Here -->

    </div>

    <?php $this->load->view('admin/footer'); ?>