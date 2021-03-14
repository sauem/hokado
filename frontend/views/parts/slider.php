<?php if ($sliders) { ?>
    <div class="banner-section">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <?php foreach ($sliders as $slider) { ?>
                <div class="slide" data-bg-image="<?= $slider->avatar ?>">
                    <div class="auto-container w-100">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="title">consulte company</div>
                                    <h1><?= $slider->name ?></h1>
                                    <div class="text"><?= $slider->description ?></div>
                                    <div class="btn-box">
                                        <a href="<?= $slider->href ?>" class="theme-btn btn-style-one">
                                            <span class="txt">chi tiết</span></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
