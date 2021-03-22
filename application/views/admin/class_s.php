<?php $this->load->view('admin/sidebar'); ?>
<div class="dashboard-content-one">

    <div class="dashboard-content-one">

        <div class="breadcrumbs-area">
            <ul>
                <li>
                    <h3>Home</h3>
                </li>
                <li> Class </li>
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
                        <h3>All Student Data</h3>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="<?php echo base_url() ?>class_s/add_class"
                            style="font-size: 18px;">Add Class</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>Active</th>
                                
                                
                                
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach($display as $detail)
                                    {
                                        echo "<tr>"; 
                                        echo "<td>".$detail-> class_name ."</td>";
                                        // echo "<td> <img src=".$detail->image." style='width: 120px;margin-left: -10px;'></td>";
                                        echo "<td>".$detail->active."</td>";
                                        
                                        
                                        echo "<td><a class='btn btn-primary' href='class_s/getid_class?id=".$detail->id."'>Update</a></td>";
                                        echo "<td><a class ='btn btn-danger' href='student/delete_student?id=".$detail->id."'>Delete</a></td>";
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