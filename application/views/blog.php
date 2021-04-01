<?php $this->load->view('header'); ?>
<div class="isotop-classes-tab isotop-btn-accent" style="margin: 50px;">
    <h1>Select Category</h1>
    <?php  foreach ($display as $data) { ?>
    <a href="<?php echo base_url();?>blog/?id=<?php echo $data->id;?>"><?php echo $data->category_name; ?></a>
    <?php } ?>
</div>
<!-- <?php echo "<pre>"; print_r($display); ?> -->
<div class="container" style="margin:20px">
    <ul class="news-wrapper">
        <li>

        <!-- <?php echo "<pre>"; print_r($load); ?> -->
        
        <?php  foreach ($load as $data) { ?>

            <div class="news-img-holder">
                <a href="#"><img src="<?php echo base_url() ?>assets/user/img/news/1.jpg" class="img-responsive"
                        alt="news"></a>
            </div>
            <div class="news-content-holder">
            <h4>Category : <?php echo $data->category_name; ?></h4>
                <h3><a href="single-news.html"><?php echo $data->post_title; ?></a></h3>
                <div class="post-date">Post Code : <?php echo $data->post_code; ?></div>
                <div class="post-date">Date : <?php echo date("d-m-Y", strtotime($data->created_at)); ?></div>
                <p>Post Code : <?php echo $data->post_number; ?></p>
            </div>
            <?php } ?>
        </li>
        
        
    </ul>
</div>

<?php $this->load->view('footer'); ?>