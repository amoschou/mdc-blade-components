<nav class="mdc-list" @isset($id) id="{{ $id }}::list" @endisset>
  {{ $slot }}
</nav>
