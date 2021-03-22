<?php $this->load->view('admin/sidebar'); ?>
<div class="dashboard-content-one">

    <div class="dashboard-content-one">

        <div class="breadcrumbs-area">
            <ul>
                <li>
                    <h3>Home</h3>
                </li>
                <li> Teacher </li>
            </ul>
        </div>



        <div class="card height-auto">
            <div class="card-body">
                <!-- Insert Messege Successfull. -->

                <?php if($this->session->flashdata('success') != "") { ?>
                <div class="alert alert-success alert-dismissible mb-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
                <?php unset($_SESSION['success']); } ?>

                <!-- End Insert Messege Successfull. -->

                <!-- Delete Messege Successfull. -->

                <?php if($this->session->flashdata('delete') != "") { ?>
                <div class="alert alert-success alert-dismissible mb-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo $this->session->flashdata('delete'); ?></strong>
                </div>
                <?php unset($_SESSION['delete']); } ?>

                <!-- End Delete Messege Successfull. -->

                <!-- update Messege Successfull. -->

                <?php if($this->session->flashdata('update') != "") { ?>
                <div class="alert alert-success alert-dismissible mb-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo $this->session->flashdata('update'); ?></strong>
                </div>
                <?php unset($_SESSION['update']); } ?>

                <!-- End update Messege Successfull. -->
                <div class="heading-layout1">



                    <div class="item-title">
                        <h3>All Teachers Data</h3>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="<?php echo base_url() ?>teachers/add_teacher"
                            style="font-size: 18px;">Add Teacher</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>ID No </th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Pin-Code</th>
                                <th>Contact</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach($details as $detail)
                                    {
                                        echo "<tr>"; 
                                        echo "<td>".$detail->id_no."</td>";
                                        echo "<td> <img src=".$detail->image." style='width: 120px;margin-left: -10px;'></td>";
                                        echo "<td>".$detail->teacher_name."</td>";
                                        echo "<td>".$detail->teacher_gender."</td>";
                                        echo "<td>".$detail->teacher_dob."</td>";
                                        echo "<td>".$detail->teacher_email."</td>";
                                        echo "<td>".$detail->teacher_address."</td>";
                                        echo "<td>".$detail->teacher_pin_code."</td>";
                                        echo "<td>".$detail->teacher_phone."</td>";
                                        echo "<td><a class='btn btn-primary' href='teachers/fetch_id?id=".$detail->id."'>Update</a></td>";
                                        echo "<td><a class ='btn btn-danger' href='teachers/delete?id=".$detail->id."'>Delete</a></td>";
                                        echo "</tr>";
                                        
                                        }
                                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/footer'); ?>