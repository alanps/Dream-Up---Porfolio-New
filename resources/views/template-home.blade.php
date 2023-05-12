{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')

  <section class="daumaolhada d-block">

    <div class="d-flex">
      @include('components.section-title', ['section_title' => 'Dá Uma Olhada', 'bgcolor' => '#fff', 'color' => '#000', 'class' => 'marged'])

      <div class="setas-slider">
        <i class="fa-solid fa-arrow-left seta-esquerda"></i>
        <i class="fa-solid fa-arrow-right seta-direita"></i>
      </div>
    </div>

    <x-carrousel/>

  </section>

  <section class="saibamais">

    @include('components.section-title', ['section_title' => 'Saiba Mais', 'bgcolor' => '#2d2d2d', 'color' => '#fff', 'class' => ''])

    <div class="saibamais-content">
      Desenvolvedor Full Stack com mais de 7 anos de experiência em empresas e mais de 22 anos programando por prazer, programo em linguagens e banco de dados como HTML, CSS, SASS, SCSS, JavaScript, PHP, MySQL, PostgreSQL, MongoDB, DynamoDB e faço uso de algumas bibliotecas, frameworks e CMS como Bootstrap (CSS e JavaScript), Tailwind (CSS e JavaScript), Materialize (CSS e JavaScript), React (JavaScript), Redux.JS (JavaScript), jQuery (JavaScript), WordPress (PHP), WooCommerce (WordPress), Sage (WordPress), WP Emerge (WordPress), Laravel (PHP), CakePHP (PHP), Symfony (PHP), Node.JS (JavaScript) e Express.JS (Node.JS).
      <br><br>
      Uso de metodologia ágil (Scrum e Kanban), ferramentas de gerenciamento de projetos (JIRA, Todoist, Trello e Planner), uso de arquiteturas/design patterns (MVC (Model-View-Controller) e OOP (Object-Oriented Programming)), criação de layout web, mobile e tablet com protótipo navegável (Figma), debugging de código, desenvolvimento e integração de APIs e WebServices (Rest e SOAP com retornos em JSON e XML), serialização de dados (YAML), leitura de documentações, desenvolvimento de documentação (I/O Docs e Swagger), otimização em mecanismos de busca (SEO), solicitações assíncronas (AJAX), controle de versão (GIT), ferramentas de controle de versão (GitHub e Bitbucket), gerenciadores de pacotes (Composer e NPM), ferramentas de automatização (Webpack, Gulp.JS, Grunt e Laravel Mix), virtualização em containers (Docker), ferramenta de desenvolvimento PHP em Docker (DDEV), ferramenta de instalação e configuração de ambientes (WordOps), integração contínua e entrega contínua (CI/CD), Linux (SSH e cURL) e administração de servidores pelos consoles da Amazon Web Services (AWS EC2, RDS, S3, Route 53, SQS, SNS e DynamoDB), Google Cloud (VMs), Azure (VMs), Digital Ocean, Cpanel e WHM.
      <br><br>
      Trabalho com todo processo de um time com Team Lead, Pull Request e Code Review, QA, ambientes de produção e homologação, estimativa de tarefas com planos de ação, planejamento de tarefas diario, semanal e mensal baseado nas estimativas, daily e contato direto com o time e clientes por ligações, chat ou WhatsApp.
    </div>

  </section>

  <section class="infos">

    <div class="row flex-column flex-md-row">
      <div class="col col-12 col-md-4">
        <div class="blocos bloco-emprego d-flex flex-column">
          <div class="linha1">STATUS: <span>Desempregado</span></div><!--
          <div class="linha2"><a href="https://studiovisual.com.br" target="_blank"><img src="@asset('/images/studiovisual.png')"></a></div>
          <div class="linha3">Até Outubro de 2022 na <a href="https://studiovisual.com.br" target="_blank">Studio Visual</a></div>
          <div class="linha4">(<?php echo calc_diff_date('2021-06-21', '2022-10-30'); ?>)</div>-->
        </div>
      </div>
      <div class="col col-12 col-md-4">
        <div class="blocos">
          <div class="bloco-eu">
            <div class="linha1"><img src="@asset('/images/balao.png')"><span>Esse é meu portfólio!</span></div>
            <div class="linha2"><img src="@asset('/images/eu.png')"></div>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-4">
        <div class="blocos">
          <div class="bloco-curriculum">
              <div class="linha1">Meu Curriculum</div>
              <div class="linha2">
                <a href="https://agenciadreamup.com.br/curriculum" target="_blank"><img src="@asset('/images/curriculum.png')"></a>
              </div>
          </div>
        </div>
      </div>
    </div>

  </section>

@endsection

