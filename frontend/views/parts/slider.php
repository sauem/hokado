<?php

use common\helper\HelperFunction;

?>
<?php if (!empty($sliders)) { ?>
    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
             data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <?php foreach ($sliders as $slider) { ?>
                <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
                    <div class="bg-img">
                        <img src="<?= $slider->avatar ?>" alt="<?= $slider->name ?>">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                <div class="slide__content">
                                    <h2 class="slide__title">
                                        <a href="<?= $slider->href?>">
                                            <?= $slider->name ?>
                                        </a>
                                    </h2>
                                    <p class="slide__desc"><?= $slider->description ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
