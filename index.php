<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- HEADER -->
  <?php get_header(); ?>

  <!-- ABOUT -->
  <section class="about">
    <div class="container">
      <h3 class="sm-header about__h3">our story</h3>
      <div class="about__line blue-line"></div>
      <div class="about__content">
        <div class="about__content-left">
          <h2 class="about__h2">
            <?= CFS()->get('history_title'); ?>
          </h2>
          <p class="text-p about__text">
            <?= CFS()->get('history_text'); ?>
          </p>
        </div>
        <div class="about__content-right">

          <?php $loop = CFS()->get('card');
          foreach ($loop as $row) {
            ?>
            <div class="about__item" style="background: url(<?= $row['card_background'] ?>);">
              <p class="about__img-title">
                <?= $row['card_top_Line']; ?><br /><?= $row['card_bottom_Line']; ?>
              </p>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- SERVICES -->
  <section class="services">
    <div class="container">
      <div class="services__top">
        <div class="services__top-header">
          <h3 class="sm-header services__top-header-text">
            our capabilities
          </h3>
          <div class="blue-line"></div>
        </div>
        <p class="services__text">
          <?= CFS()->get('capabilities_text'); ?>
        </p>
        <button class="blue-button"><?= CFS()->get('capabilities_button'); ?></button>
      </div>

      <div class="services__bottom">
        <?php $loop = CFS()->get('cap_cards');
        foreach ($loop as $row) {
          ?>
          <div class="services__bottom-item">
            <img src="<?= $row['card_img'] ?>" alt="project" />
            <h4>
              <?= $row['card_title']; ?>
            </h4>
            <p class="text-p">
              <?= $row['card_text']; ?>
            </p>
          </div>
          <?php
        }
        ?>
      </div>


    </div>
  </section>

  <!-- Feedback -->
  <section class="feedback" style="background: url(<?= CFS()->get('feedback_background') ?>) repeat-x center;">
    <div class="container">
      <h2 class="feedback__h2">
        <?= CFS()->get('feedback_title'); ?>
      </h2>
      <button class="blue-button feedback_button"><?= CFS()->get('feedback_button'); ?></button>
    </div>
    <div class="nav"><?php the_content(); ?></div>
    
  </section>

  <!-- Footer -->
  <?php get_footer(); ?>
  <script src="https://kit.fontawesome.com/61795b381c.js" crossorigin="anonymous"></script>
  <?php wp_footer(); ?>
</body>

</html>