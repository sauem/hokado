<?php

use common\helper\HelperFunction;

?>
<aside class="sidebar">
    <div class="widget widget-search">
        <h5 class="widget__title">Search</h5>
        <div class="widget__content">
            <form class="widget__form-search">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn" type="submit"><i class="icon-search"></i></button>
            </form>
        </div><!-- /.widget-content -->
    </div><!-- /.widget-search -->
    <div class="widget widget-posts">
        <h5 class="widget__title">Recent Posts</h5>
        <div class="widget__content">
            <!-- post item #1 -->
            <div class="widget-post-item d-flex align-items-center">
                <div class="widget-post__img">
                    <a href="#"><img src="/usvn/images/blog/grid/2.jpg" alt="thumb"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget-post__content">
                    <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your
                            Leadership</a></h4>
                    <span class="widget-post__date">Sep 19, 2020</span>
                </div><!-- /.widget-post-content -->
            </div><!-- /.widget-post-item -->
            <!-- post item #2 -->
            <div class="widget-post-item d-flex align-items-center">
                <div class="widget-post__img">
                    <a href="#"><img src="/usvn/images/blog/grid/3.jpg" alt="thumb"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget-post__content">
                    <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About
                            Employee?</a></h4>
                    <span class="widget-post__date">July 7, 2020</span>
                </div><!-- /.widget-post-content -->
            </div><!-- /.widget-post-item -->
            <!-- post item #3 -->
            <div class="widget-post-item d-flex align-items-center">
                <div class="widget-post__img">
                    <a href="#"><img src="/usvn/images/blog/grid/6.jpg" alt="thumb"></a>
                </div><!-- /.widget-post-img -->
                <div class="widget-post__content">
                    <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your
                            Leadership</a></h4>
                    <span class="widget-post__date">March 13, 2020</span>
                </div><!-- /.widget-post-content -->
            </div><!-- /.widget-post-item -->
        </div><!-- /.widget-content -->
    </div><!-- /.widget-posts -->
    <?php if (isset($categories) && !empty($categories)) { ?>
        <div class="widget widget-categories">
            <h5 class="widget__title"><?= Yii::t('app','category')?></h5>
            <div class="widget-content">
                <ul class="list-unstyled">
                    <?php foreach ($categories as $category) { ?>
                        <li>
                            <a href="<?= HelperFunction::Link(ARCHIVE, $category->slug) ?>">
                                <span><?= $category->name ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div><!-- /.widget-content -->
        </div>
    <?php } ?>
    <!--    <div class="widget widget-tags">-->
    <!--        <h5 class="widget__title">Tags</h5>-->
    <!--        <div class="widget-content">-->
    <!--            <ul class="list-unstyled d-flex flex-wrap">-->
    <!--                <li><a href="#">Insights</a></li>-->
    <!--                <li><a href="#">Industry</a></li>-->
    <!--                <li><a href="#">Modern</a></li>-->
    <!--                <li><a href="#">Corporate</a></li>-->
    <!--                <li><a href="#">Business</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
</aside>
