<i>
  @foreach ($images as $index => $image)
  <input type="radio" name="s" style="background-image: url('{{ $image }}');">
  @endforeach
  <div class="carousel-controls">
    <div class="carousel-nav">
      @foreach ($images as $index => $image)
      <button class="nav-btn" data-slide="{{ $index }}"></button>
      @endforeach
    </div>
  </div>
</i>