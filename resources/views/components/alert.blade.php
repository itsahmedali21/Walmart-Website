<div class="alert alert-{{ $validType }}">
  

    @isset ($title)
        <h4 {{ $title->attributes->class(['alert-heading']) }} >{{ $title }}</h4>
        <hr>
           @endisset

    <div>{{ $slot }}</div>
</div>
