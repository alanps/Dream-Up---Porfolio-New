@section('secao_titulo', 'PERSONAGEM é um mundo de imagens, uma aventura por histórias e viagens, músicas e poemas, comédia e drama.')
@include('head')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/pagina.css') }}">
<link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
<link href="{{ asset('css/slabtext.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('js/fancybox/jquery.fancybox.css?v=2.1.7') }}" type="text/css" media="screen" />
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.mousewheel.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox.pack.js?v=2.1.7') }}"></script>
<script src="{{ asset('js/jquery.slabtext.js') }}"></script>

@if(isset($imagens[0]))
<script type="text/javascript">

	//formatar data
	function dataFormatada(data){
	    var data = new Date(data * 1000),
	        dia  = data.getDate().toString().padStart(2, '0'),
	        mes  = (data.getMonth()+1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
	        ano  = data.getFullYear();
	    return dia+"/"+mes+"/"+ano;
	}

@if($total/$page_size >= 1)
	//ajax scroll infinito
	var pagina = 2;
	var paginas = parseInt("{{ $total }}"/"{{ $page_size }}"+1);
	function ajax(){
		$.ajax({
			url:"{{ route('index') }}/listarImagemAlbum/{{ $imagens[0]->album_slug }}",
			type:"GET",
			data: {"page": pagina},
            dataType: "json",
            contentType: "application/json",
            beforeSend: function (data) {
               data.setRequestHeader("Authorization", "Bearer NOvgX6zpAh8F0JvZhk2EVV1RxzUk7JDrvJJC2x9lFO3mzz9Lm3rgPGAFyKp6");
            },
			success: function(data){
				console.log(data);
				$(data.data).each((index, element) => {
					var clone = $(".items .item.template").clone();
					clone.removeClass("template");
					clone.find(".descricao").html(element.descricao);
					clone.find(".descricao").html(element.descricao);
					clone.find(".imagem").attr("src", "/uploads/"+element.url);
					clone.find(".imagemLink").attr("href", "/uploads/"+element.url);
					clone.find(".imagemLink").attr("rel", "group");
					clone.find(".criacao").html("Adicionado em: "+dataFormatada(element.updated_at));
					$(".items").append(clone);
					$(".items").append($(".items .barra.template").clone().removeClass("template"));
					$(".items .item .imagemLink").fancybox();
				});
				if (pagina == paginas){
					$(".carregarmais").remove();
					$(".carregarmaisbarra").remove();
				}
				pagina++;
			}
		});
	}
@endif

	$(document).ready(function() {

		$(".items .item .imagemLink").click(function() {
			$.ajax({
				url:"{{ route('index') }}/clickImg/" + $(this).attr("id"),
				type:"GET",
	            beforeSend: function (data) {
	               data.setRequestHeader("Authorization", "Bearer NOvgX6zpAh8F0JvZhk2EVV1RxzUk7JDrvJJC2x9lFO3mzz9Lm3rgPGAFyKp6");
	            },
				success: function(data){
					console.log(data);
				}
			});
		});

		$(".tituloSecao").slabText({"postTweak": false, "maxFontSize": 28});

		//lightbox
		@if($album->id==3)
		$(".items .item .imagemLink").fancybox({"loop": false, "nextEffect": "none", "prevEffect": "none"});
		@else
		$(".items .item .imagemLink").fancybox({"loop": false,
    	"helpers" : {
    		"title" : {
    			"type" : 'inside'
    		}
    	}});
		@endif

@if($total/$page_size >= 1)
		//scroll infinito
		$(window).on("scroll", function() {
			var scrollHeight = $(document).height();
			var scrollPosition = $(window).height() + $(window).scrollTop();
			if (((scrollHeight.toFixed() - scrollPosition.toFixed()) / scrollHeight.toFixed()) === 0) {
		   		console.log("fim");
				ajax();
			}
		});

		//scroll infinito - botão carregar mais
		$(".carregarmais").click(function() {
			ajax();
		});
@endif

	});

</script>
@endif

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
				<a href="{{ route('index') }}" class="total">Ver outras histórias.</a>
				@if(isset($imagens[0]))
				<div class="tipo">{{ $imagens[0]->album_tipo=="historia"?"História":"Seção" }}</div>
				<div class="tituloSecao" id="tituloSecao">{{ $imagens[0]->album_nome_min }}</div>
				@else
				<div class="tipo">Seção</div>
				<div class="tituloSecao" id="tituloSecao">Escolha de Histórias</div>
				@endif
			</div>

			<img class="barra" src="{{ asset('images/barra.png') }}">

			<div class="citacaoContainer">
				<div class="total">Total de {{ $total }} tópicos</div>
				<div class="aspas aspasAbre">“</div>
				@if(isset($imagens[0]))
				<div class="citacao">{!! $imagens[0]->album_descricao !!}</div>
				@else
				<div class="citacao" style="color:#edbb16;font-size:1em!important;">Erro, nada aqui!<br><a href="{{ route('index') }}">Clique aqui para voltar</a><br></div>
				@endif
				<div class="aspas aspasFecha">”</div>
			</div>

			<img class="barra" src="{{ asset('images/barra.png') }}">

			<div class="items">
				@php $grupo = []; @endphp
				@foreach($imagens as $imagem)
					@if(!isset($imagem->grupo))
					<div class="item">
						<div class="imagemContainer">
							<a class="imagemLink" rel="group" href="/uploads/{{ $imagem->url }}" id="{{ $imagem->id }}">
								<figure>
									<img class="imagem" src="/uploads/{{ $imagem->url }}">
								</figure>
							</a>
						</div>
						<div class="descricaoContainer">
							@if (isset($imagem->descricao)) <div class="descricao">{!! $imagem->descricao !!}</div> @endif
							<div class="criacao">Adicionado em: {{ date("d/m/Y", strtotime($imagem->updated_at)) }}</div>
						</div>
					</div>
					<img class="barra" src="{{ asset('images/barra.png') }}">
					@else
						@if(!isset($grupo[$imagem->grupo]))
							@php $grupo[$imagem->grupo] = 1; @endphp
						@endif
						@if($grupo[$imagem->grupo] == 1)
						<div class="item">
							<div class="imagemContainer">
								<a class="imagemLink" rel="{{ $imagem->grupo }}" href="/uploads/{{ $imagem->url }}" id="{{ $imagem->id }}">
									<figure>
										<img class="imagem" src="/uploads/{{ $imagem->url }}">
									</figure>
								</a>
							</div>
							<div class="descricaoContainer">
								@if (isset($imagem->descricao)) <div class="descricao">{!! $imagem->descricao !!}</div> @endif
								<div class="criacao">Adicionado em: {{ date("d/m/Y", strtotime($imagem->updated_at)) }}</div>
							</div>
						</div>
						<img class="barra" src="{{ asset('images/barra.png') }}">
						@else
						<div class="item" style="display:none">
							<div class="imagemContainer" style="display:none">
								<a class="imagemLink" rel="{{ $imagem->grupo }}" href="/uploads/{{ $imagem->url }}">
									<figure>
										<img class="imagem" src="/uploads/{{ $imagem->url }}">
									</figure>
								</a>
							</div>
						</div>
						@endif
						@php $grupo[$imagem->grupo]++; @endphp
					@endif
				@endforeach

				<div class="item template">
					<div class="imagemContainer">
						<a class="imagemLink" rel="" href="">
							<figure>
								<img class="imagem" src="">
							</figure>
						</a>
					</div>
					<div class="descricaoContainer">
						<div class="descricao"></div>
						<div class="criacao">Adicionado em: </div>
					</div>
				</div>
				<img class="barra template" src="{{ asset('images/barra.png') }}">
			</div>
			@if(isset($imagens[0]))
			@if($total/$page_size >= 1)
			<div class="carregarmaisContainer">
				<div class="carregarmais">Clique aqui para carregar mais</div>
			</div>
			<img class="barra carregarmaisbarra" src="{{ asset('images/barra.png') }}">
			@endif
			@endif

			<div class="copyright">Todos os direitos reservados.</div>

		</div>
	</div>

</div>