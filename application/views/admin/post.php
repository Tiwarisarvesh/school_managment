<?php $this->load->view('admin/sidebar'); ?>
<div class="dashboard-content-one">

    <div class="dashboard-content-one">

        <div class="breadcrumbs-area">
            <ul>
                <li>
                    <h3>Home</h3>
                </li>
                <li> Post </li>
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
                        <h3>All Post</h3>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="<?php echo base_url() ?>post/create_post"
                            style="font-size: 18px;">Add Post</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>

                                <th style="width: 12%;">Code</th>
                                <th style="width: 21%;">Title</th>
                                <th style="width: 15%;">Category Name</th>
                                <th style="width: 14%;">Number</th>
                                <th style="width: 7%;" colspan="2">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach($data as $detail) { ?>

                            <tr>
                                <td><?php echo $detail->post_code ?> </td>
                                <td><?php echo $detail->post_title ?> </td>
                                <td><?php echo $detail->category_name ?> </td>
                                <td><?php echo $detail->post_number ?> </td>
                                <td><a class='btn btn-primary'
                                        href="<?php echo base_url();?>post/edit_get_by_id/?id=<?php echo $detail->id;?>">Update</a>
                                </td>
                                <td><a class='btn btn-danger'
                                        href="<?php echo base_url();?>post/delete_post/?id=<?php echo $detail->id;?>">Delete</a>
                                </td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/footer'); ?>