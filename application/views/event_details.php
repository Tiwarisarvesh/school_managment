<?php $this->load->view('header'); ?>



<div class="inner-page-banner-area"
    style="background-image: url('<?php echo base_url() ?>assets/user/img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Event Book</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Details</li>
            </ul>
        </div>
    </div>
</div>
<section class="jumbotron text-center">
    <div class="container">
    <?php if($this->session->flashdata('success') != "") { ?>
                <div class="alert alert-success alert-dismissible mb-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
                <?php unset($_SESSION['success']); } ?>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Event Name</th>
                            <th scope="col" style="width: 30%;">City</th>
                            <th scope="col" style="width: 3%;" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($this->cart->contents() as $items): ?>
                        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td><?php echo $items['name']; ?></td>
                            <td><?php echo $items['city']; ?></td>
                            <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '7', 'size' => '7')); ?>
                            </td>
                            <td class="text-right"><?php echo $this->cart->format_number($items['price']); ?></td>
                            <td class="text-right"><?php echo $this->cart->format_number($items['subtotal']); ?>/-</td>
                            
                            <td><a class="btn btn-sm btn-danger"
                        href="<?php echo base_url();?>welcome/removeCartItem/?id=<?php echo $items['rowid'];?>" role="button"><i class="fa fa-trash"></i></a></td>    
                                
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right">
                                <strong><?php echo $this->cart->format_number($this->cart->total()); ?> /- </strong>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="col mb-2">
            <div class="row" style="margin-bottom: 40px;">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light"></button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a class="btn btn-lg  btn-success text-uppercase"
                        href="<?php echo base_url() ?>welcome/process_checkout" role="button">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<?php $this->load->view('footer'); ?>