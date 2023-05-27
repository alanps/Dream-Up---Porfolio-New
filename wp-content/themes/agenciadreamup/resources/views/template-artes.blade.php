{{--
  Template Name: Artes
--}}

@extends('layouts.app')

@section('content')

  <section class="sobrincadeira d-block">

    <div class="d-flex">
      @include('components.section-title', ['section_title' => 'Só Brincadeira', 'bgcolor' => '#fff', 'color' => '#000', 'class' => 'marged'])

      <x-carrousel/>

  </section>

  <div class="setas-slider">
    <div class="seta-esquerda"><i class="fa-solid fa-arrow-left"></i> Anterior</div>
    <div class="seta-direita">Próximo <i class="fa-solid fa-arrow-right"></i></div>
  </div>

@endsection

