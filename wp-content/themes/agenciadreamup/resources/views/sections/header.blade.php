<div class="container-xxl container-fluid">
  <div class="row">
    <div class="col col-12">

      <header class="banner">
        
        <div class="logo">
          <?php echo get_custom_logo(); ?>
        </div>

        @if (has_nav_menu('primary_navigation'))
          <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
          </nav>
        @endif

      </header>

    </div>
  </div>
