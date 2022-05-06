<div class="container-xl container-fluid">
  <div class="row">
    <div class="col col-12">

      <header class="banner">
        
        <div class="logo">
          <?php echo get_custom_logo(); ?>

          <a class="home" href="<?php echo get_home_url(); ?>">
            <div class="sublogo">
              <div class="sublogo-portfolio">Portfólio</div>
              <div class="sublogo-nome">Alan Pardini Sant'Ana</div>
              <div class="sublogo-desenvolvedor">Desenvolvedor Full Stack</div>
            </div>
          </a>
        </div>

        @if (has_nav_menu('primary_navigation'))
          <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
          </nav>
        @endif

      </header>

    </div>
  </div>
