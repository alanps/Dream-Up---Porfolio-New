<ul class="carrousel">

	@php 
    global $wp_query;
	@endphp
	@if($wp_query->post->post_name == 'artes' || $wp_query->post->post_name == 'homepage')
		@foreach($categories as $key => $category)
		<li class="slide-artes slide slide{{$key}} {{($key==0) ? 'active' : ''}}">
			<div class="thumbs-container">
				<div class="thumbs">
					@foreach(get_carrousel_posts_artes($category->cat_ID) as $key => $post)
						<a href="#" class="lightbox">
							<div class="box">
								<img src="{{ get_the_post_thumbnail_url($post) }}" data-key="{{$key}}">
							</div>
						</a>
					@endforeach
				</div>
			</div>
			<div class="categoria">
				<span class="categoria-nome">{{ $category->name }}</span>
			</div>
		</li>
		@endforeach
	@elseif($wp_query->post->post_name == 'sites-e-empregos')
		@foreach(get_carrousel_posts_sites() as $key => $post)
		<li class="slide-site-apps slide slide{{$key}} {{($key==0) ? 'active' : ''}}">
			<div class="post-thumbs-container">
				<div class="post-thumb">
					<img src="{{ get_the_post_thumbnail_url($post) }}">
				</div>
			</div>
			<div class="post">
				<span class="post-desc-title">
					<div class="post-title">{{ $post->post_title }}</div>
					<div class="post-desc">{{ $post->post_content }}</div>
				</span>
			</div>
			<div class="infos">
				<div class="infos-container">
					@if(get_fields($post->ID)['sites_e_apps_group']['site'])
					<span class="info-site">
						<div class="info-title">Site:</div>
						<div class="info-desc"><a target="_blank" href="{{ get_fields($post->ID)['sites_e_apps_group']['site'] }}">{{ get_fields($post->ID)['sites_e_apps_group']['site'] }}</a></div>
					</span>
					@endif
					@if(get_fields($post->ID)['sites_e_apps_group']['cargo'])
					<span class="info-cargo">
						<div class="info-title">Cargo:</div>
						<div class="info-desc">{{ get_fields($post->ID)['sites_e_apps_group']['cargo'] }}</div>
					</span>
					@endif
					@if(get_fields($post->ID)['sites_e_apps_group']['entrada_empresa'])
					<span class="info-tempo">
						<div class="info-title">Tempo no Cargo:</div>
						@if(!get_fields($post->ID)['sites_e_apps_group']['saida_empresa'])
						<div class="info-desc">{{ calc_diff_date(get_fields($post->ID)['sites_e_apps_group']['entrada_empresa'], get_fields($post->ID)['sites_e_apps_group']['saida_empresa']) }} (de {{ strftime('%m/%Y', strtotime(get_fields($post->ID)['sites_e_apps_group']['entrada_empresa'])) }} - até agora)</div>
						@else
						<div class="info-desc">{{ calc_diff_date(get_fields($post->ID)['sites_e_apps_group']['entrada_empresa'], get_fields($post->ID)['sites_e_apps_group']['saida_empresa']) }} (de {{ strftime('%m/%Y', strtotime(get_fields($post->ID)['sites_e_apps_group']['entrada_empresa'])) }} - até {{ strftime('%m/%Y', strtotime(get_fields($post->ID)['sites_e_apps_group']['saida_empresa'])) }})</div>
						@endif
					</span>
					@endif
				</div>
			</div>
		</li>
		@endforeach
	
	@elseif($wp_query->post->post_name == 'aplicativos')
		@foreach(get_carrousel_posts_apps() as $key => $post)
		<li class="slide-site-apps slide slide{{$key}} {{($key==0) ? 'active' : ''}}">
			<div class="post-thumbs-container">
				<div class="post-thumb">
				@if(get_fields($post->ID)['sites_e_apps_group']['video'])
					<video width="100%" height="320" controls loop poster="{{ get_the_post_thumbnail_url($post) }}">
						<source src="{{ get_fields($post->ID)['sites_e_apps_group']['video'] }}" type="video/mp4">
					</video>
				@else
					<img src="{{ get_the_post_thumbnail_url($post) }}">
				@endif
				</div>
			</div>
			<div class="post">
				<span class="post-desc-title">
					<div class="post-title">{{ $post->post_title }}</div>
					<div class="post-desc">{{ $post->post_content }}</div>
				</span>
			</div>
			<div class="infos">
				<div class="infos-container">
					@if(get_fields($post->ID)['sites_e_apps_group']['site'])
					<span class="info-site">
						<div class="info-title">Site:</div>
						<div class="info-desc"><a target="_blank" href="{{ get_fields($post->ID)['sites_e_apps_group']['site'] }}">{{ get_fields($post->ID)['sites_e_apps_group']['site'] }}</a></div>
					</span>
					@endif
					@if(get_fields($post->ID)['sites_e_apps_group']['cargo'])
					<span class="info-cargo">
						<div class="info-title">Cargo:</div>
						<div class="info-desc">{{ get_fields($post->ID)['sites_e_apps_group']['cargo'] }}</div>
					</span>
					@endif
					@if(get_fields($post->ID)['sites_e_apps_group']['entrada_empresa'])
					<span class="info-tempo">
						<div class="info-title">Tempo no Cargo:</div>
						@if(!get_fields($post->ID)['sites_e_apps_group']['saida_empresa'])
						<div class="info-desc">{{ calc_diff_date(get_fields($post->ID)['sites_e_apps_group']['entrada_empresa'], get_fields($post->ID)['sites_e_apps_group']['saida_empresa']) }} até agora</div>
						@else
						<div class="info-desc">{{ calc_diff_date(get_fields($post->ID)['sites_e_apps_group']['entrada_empresa'], get_fields($post->ID)['sites_e_apps_group']['saida_empresa']) }}</div>
						@endif
					</span>
					@endif
				</div>
			</div>
		</li>
		@endforeach
	@endif

</ul>
