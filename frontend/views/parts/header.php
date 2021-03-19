<?php

use common\helper\HelperFunction;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;

$menu = HelperFunction::getMenu();
$menuItems = [];
if ($menu) {
    $menuItems = Json::decode(ArrayHelper::getValue($menu, 'items'));
}
?>

<header class="header header-<?= isset($this->params['header_type']) ? $this->params['header_type'] : 'transparent' ?>">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">

            <a class="navbar-brand" href="/">
                <img width="80" src="<?= HelperFunction::getLogo('header') ?>" class="logo-light" alt="logo">
                <img width="80" src="<?= HelperFunction::getLogo('header') ?>" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav m-auto">
                    <?php if (!empty($menuItems)) { ?>
                        <?php foreach ($menuItems as $item) {
                            $children = ArrayHelper::getValue($item, 'children', []);
                            ?>
                            <li class="nav__item <?= !empty($children) ? 'has-dropdown' : '' ?>">
                                <a <?= !empty($children) ? 'data-toggle="dropdown"' : '' ?>
                                        href="<?= !empty($children) ? '#' : HelperFunction::Link($item['type'], $item) ?>"
                                        class="<?= !empty($children) ? 'dropdown-toggle' : '' ?> nav__item-link">
                                    <?= $item['title'] ?>
                                </a>
                                <?php if (!empty($children)) { ?>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($children as $submenu) { ?>
                                            <li class="nav__item">
                                                <a href="<?= HelperFunction::Link($submenu['type'], $submenu) ?>"
                                                   class="nav__item-link">
                                                    <?= $submenu['title'] ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                            <?php ?>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
                    <li class="nav__item language has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">
                            <img src="/usvn/images/flags/<?= HelperFunction::Language('vi-VN') ? 'vi.svg' : 'en.svg' ?>"/>
                            <span class="ml-1"></span><?= HelperFunction::Language('vi-VN') ? 'VI' : 'EN' ?> </a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a onclick="switchLanguage('<?= LANG_VI ?>')" href="javascript:void(0)"
                                   class="nav__item-link">
                                    <img width="24" src="/usvn/images/flags/vi.svg"/> VN</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="javascript:void(0)" onclick="switchLanguage('<?= LANG_EN ?>')"
                                   class="nav__item-link">
                                    <img width="24" src="/usvn/images/flags/en.svg"/> English</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li>
                    <li>
                        <a href="tel: <?= HelperFunction::setting('hotline_1') ?>"
                           class="action__btn">
                            <i class="icon-phone"></i><span><?= HelperFunction::setting('hotline_1', false) ?></span>
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- /.navbar-actions -->
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header>
