<!doctype html>
<?php if(!is_page('curriculum') && !is_page('calculadora') && !is_page('calculadora-mmc-mdc') && !is_page('personagem') && !is_404()){ ?>
<html <?php language_attributes(); ?> style="background-image: url(@asset('/images/bg.jpg'));">
<?php } else { ?>
<html <?php language_attributes(); ?>>
<?php } ?>
  <head>
    <meta charset="utf-8">
    <?php if(is_page('personagem')){ ?>
      <meta name="viewport" content="width=device-width, initial-scale=0.35">
      <meta name="robots" content="noindex" />
    <?php } else { ?>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php } ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-0628352659139573"
     crossorigin="anonymous"></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
