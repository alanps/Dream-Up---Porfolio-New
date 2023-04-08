<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <?php if(is_page('personagem')){ ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.35">
    <meta name="robots" content="noindex" />
    <?php } else { ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php } ?>
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
