<!DOCTYPE html>
<html id="personagem" class="page-{{$view_name}}">
<head>
    <title>PERSONAGEM - O Site</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="author" content="Alan Pardini Sant'Ana" />
    <meta name="description" content="PERSONAGEM é um mundo de imagens, uma aventura por histórias e viagens, músicas e poemas, comédia e drama.">
    <meta name="keywords" content="Personagem, Personagem O Site, Personagem - O Site, blog, site, imagens, viagens, histórias, músicas, poemas, comédia, drama, desenhos, arte, animações, animação, photoshop, cartoon, crime, bandidos, blogs, seções, poema, letras, letra de música, letras de músicas, som, art, imagem, filmes, recortes de filmes, recortes, sobrevivente ao contato alien, alien, sobrevivente, fotos, fotos em movimento, imagem em movimento, animação fotografica">

    <meta property="og:url"           content="{{ Request::url() }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="PERSONAGEM - O Site" />
    <meta property="og:description"   content="PERSONAGEM é um mundo de imagens, uma aventura por histórias e viagens, músicas e poemas, comédia e drama." />
    <meta property="og:image"         content="{{ url('/') }}/images/social_share_v1.jpg" />
    <meta property="twitter:card"     content="{{ url('/') }}/images/social_share_v1.jpg" />
    <meta name="twitter:card"         content="summary_large_image">
    <meta name="twitter:site"         content="PERSONAGEM - O Site">
    <meta name="twitter:title"        content="PERSONAGEM - O Site">
    <meta name="twitter:description"  content="PERSONAGEM é um mundo de imagens, uma aventura por histórias e viagens, músicas e poemas, comédia e drama.">
    <meta name="twitter:image"        content="{{ url('/') }}/images/social_share_v1.jpg">

       
    <!-- visualização mobile ===================================================== -->
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="initial-scale = 1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ url('/') }}/images/favicon.ico">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/orator/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/verb/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/pf/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ocr/stylesheet.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    
    <?php 
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    ?>

</head>

<body>