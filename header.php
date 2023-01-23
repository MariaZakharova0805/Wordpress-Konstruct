<header class="header" style="background: url(<?= CFS()->get('header_background')?>) repeat-x center;">
    <div class="container">
        <div class="header__logo custom-logo">
            <?php the_custom_logo(); ?>
        </div>
        <h1 class="header__h1"><?= CFS()->get('header_title');?></h1>
        <h3 class="header__h3">
            <?= CFS()->get('header_slogan');?>
        </h3>
        <a href="#footer">
            <p class="header__scrollDown"><?= CFS()->get('button_down');?></p>
        </a>
    </div>
</header>
<!-- MENU NAVBAR -->
<section class="menu">
    <div class="container">
        <img class="menu__logo" src="<?= CFS()->get('dark_logo');?>" alt="menu__logo" />
        <ul class="menu__list">
            <li class="menu__list-item"><a class="active" href="<?= get_home_url(); ?>">home</a></li>
            <li class="menu__list-item active"><a href="#">about</a></li>
            <li class="menu__list-item"><a href="#">services</a></li>
            <li class="menu__list-item"><a href="#">work</a></li>
            <li class="menu__list-item"><a href="#">contact</a></li>
        </ul>
    </div>
    <div class="menu__grey-line"></div>
</section>