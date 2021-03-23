<?php $this->load->view('admin/sidebar'); ?>

<div class="dashboard-content-one">

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Teacher</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Add New Event</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php } ?>
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Create New Event</h3>
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
                <form class="new-added-form" method="POST" action="<?php echo base_url() ?>event/event_add">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Title</label>
                            <input type="text" name="title" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Rupees</label>
                            <input type="text" name="rupees" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>City</label>
                            <input type="text" name="city" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Available sheet</label>
                            <input type="text" name="sheet" placeholder="" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Start Date</label>
                            <input type="datetime-local" name="start_date" placeholder="dd/mm/yyyy"
                                class="form-control ">

                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>End Date</label>
                            <input type="datetime-local" name="end_date" placeholder="dd/mm/yyyy" class="form-control ">

                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label>Event Description</label>
                            <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                rows="9"></textarea>
                        </div>
                        <div class="col-lg-6 col-12 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Event Photo</label>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"
                                name="btn_save" value="submit">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Add New Teacher Area End Here -->

    </div>


    <?php $this->load->view('admin/footer'); ?>