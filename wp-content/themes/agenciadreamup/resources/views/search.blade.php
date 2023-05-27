@include('sections.header')

  <main id="main" class="main">
      <x-alert type="warning">
        {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
      </x-alert>
  </main>

@include('sections.footer')
