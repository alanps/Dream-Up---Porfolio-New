<meta name="keywords" content="Dream Up - Portfólio Online, Dream Up, Portfólio Online, Dream Up Portfólio, Dream Up - Portfólio, Dream Up Online, Alan Pardini Sant'Ana, Alan Pardini SantAna, Alan PS, Alan Pardini, Alan Sant'Ana, Agência Dream Up, criação de sites, criação, sites, desenvolvimento, webmaster, webdesigner, programador, layout, programação, freelancer, dream, up, dream up, desenvolvimento de sites, criatividade, estilo, pensando, portfólio, perfil, Projetos Dream Up, Projetos Agência Dream Up, Projetos Alan Pardini Sant'Ana">
<meta property="og:title" content="Dream Up - Portfólio Online">
<meta property="og:description" content="Portfólio Online de Alan Pardini Sant'Ana, aqui você pode encontrar meus trabalhos e meu curriculum.">
<meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME']; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/themes/dreamup/resources/imagesimages/banner.jpg">
<meta property="og:image:height" content="75">
<meta property="og:image:width" content="215">
<meta property="og:image:type" content="image/jpeg">
<div class="container-xl container-fluid">
  <div class="row">
    <div class="col col-12">

      <header class="banner">
        
        <div class="logo">
          <?php echo get_custom_logo(); ?>

          <a class="home" href="<?php echo get_home_url(); ?>">
            <div class="sublogo">
              <div class="sublogo-portfolio">Portfólio</div>
              <h1 class="sublogo-nome">Alan Pardini Sant'Ana</h1>
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
