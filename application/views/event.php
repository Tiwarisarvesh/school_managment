<?php $this->load->view('header'); ?>

<div class="inner-page-banner-area"
    style="background-image: url('<?php echo base_url() ?>assets/user/img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Upcoming Events</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a> -</li>
                <li>Events</li>
            </ul>
        </div>
    </div>
</div>

<!-- <?php echo "<pre>"; print_r($display); ?> -->
<!-- Inner Page Banner Area End Here -->
<!-- Event Page Area Start Here -->
<div class="event-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row event-inner-wrapper">
                    <?php foreach($display as $detail){?>
                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-6">
                        <div class="single-item">
                            <div class="item-img">
                                <a href="#"><img src="<?php echo base_url() ?>assets/user/img/event/1.jpg" alt="event"
                                        class="img-responsive"></a>
                            </div>
                            <div class="item-content">
                                <h3 class="sidebar-title">
                                    <a
                                        href="<?php echo base_url();?>welcome/event_details/?id=<?php echo $detail->id;?>">
                                        <?php echo $detail->event_title; ?></a>
                                </h3>
                                <p><?php echo $detail->event_discription; ?>.</p>
                                <ul class="event-info-block">
                                    <li><i class="fa fa-calendar"
                                            aria-hidden="true"></i><?php echo date("d-M-Y", strtotime($detail->event_book_start));  ?>
                                    </li>
                                    <li><i class="fa fa-map-marker"
                                            aria-hidden="true"></i><?php echo $detail->event_city; ?></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Sheet :
                                        <?php echo $detail->event_sheet; ?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="pagination-center">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">

                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="sidebar-categories">
                                <li><a href="#">GMAT</a></li>
                                <li><a href="#">IELTS</a></li>
                                <li><a href="#">Regular MBA</a></li>
                                <li><a href="#">BBA</a></li>
                                <li><a href="#">CSE</a></li>
                                <li><a href="#">Diploma</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>