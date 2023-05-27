{{--
  Template Name: Contato
--}}

@extends('layouts.app')

@section('content')

  <section class="contato d-block">

    <div class="d-flex">
      <div class="left">
        @include('components.section-title', ['section_title' => 'Contato', 'bgcolor' => '#fff', 'color' => '#000', 'class' => 'contato'])
        <div>
          @include('sections.footer')

        <img src="<?php echo get_home_url(); ?>/wp-content/themes/dreamup/resources/images/contato.png">
      </div>

      <div class="right">
        <div class="titulo">Formulário de Contato</div>
        <?php echo do_shortcode('[hf_form slug="contato"]'); ?>
      </div>
    </div>

  </section>

  <div class="copyright">São Paulo, <?php echo date_i18n(get_option('date_format')); ?> - Todos os direitos reservados</div>

@endsection

