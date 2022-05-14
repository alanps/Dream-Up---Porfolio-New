@include('sections.header')

  <main id="main" class="main" style="background-image: url(@asset('/images/bg.jpg'));">
    <div class="container404">
      <x-alert type="warning">
        <div class="cod">404</div>
        <div class="erro">{!! __('Página não encontrada!', 'sage') !!}</div>
      </x-alert>
    </div>
  </main>

@include('sections.footer')
