@section('secao_titulo', 'PERSONAGEM é um mundo de imagens, uma aventura por histórias e viagens, músicas e poemas, comédia e drama.')
@include('head')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<div class="corpo">
	
	<div class="topoContainer">
		<img class="topo" src="{{ asset('images/topo.png') }}">
	</div>
	<div class="dreamupContainer">
		<a href="http://www.agenciadreamup.com.br" class="dreamup_logo" target="_blank">
			<img src="{{ asset('images/dreamup-logo.jpg') }}">
		</a>
		<img class="logo_assistente" src="{{ asset('images/logo_assistente.png') }}">
	</div>
	<div class="fundo">
		<img class="underground" src="{{ asset('images/underground.png') }}">

		<div class="conteudo">
			<div class="info">
				<div class="sobre">
					<div class="titulo">Sobre</div>
					<div class="texto">PERSONAGEM é um mundo de imagens, uma aventura por histórias e viagens, músicas e poemas, comédia e drama.</div>
				</div>
				<div class="osite">
					<div class="titulo">O Site</div>
					<div class="texto">A porta de entrada para esse novo mundo, um portal de outra dimensão. Coisas incríveis podem acontecer aqui...</div>
				</div>
			</div>

			<div class="controle">
				<a href="{{ url('/') }}" class="total">Ver outras histórias.</a>
				<div class="tipo">Seção</div>
				<div class="tituloSecao">Escolha de Histórias</div>
			</div>

			<img class="barra" src="{{ asset('images/barra.png') }}">

			<div class="citacaoContainer">
				<div class="total">Total de {{Models\Album::count()}} tópicos</div>
				<div class="aspas aspasAbre">“</div>
				<div class="citacao">Escolha sua história (amarelo) ou seção (vermelho).</div>
				<div class="aspas aspasFecha">”</div>
			</div>

			<img class="barra" src="{{ asset('images/barra.png') }}">

			@php $albums = Models\Album::get() @endphp
			@foreach($albums as $album)
			<div class="item {{$album->tipo}}">
				<a href="{{ url('/'.$album->slug.'') }}" class="pagina">{{$album->nome}}</a>
			</div>
			<img class="barra" src="{{ asset('images/barra.png') }}">
			@endforeach

			<div class="copyright">Todos os direitos reservados.</div>

		</div>
	</div>

</div>