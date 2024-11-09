@props(['path', 'icon', 'title', 'description'])

<div class="card">
    <img src="{{ $path }}" alt="Imagem do Card" class="card-image" />
    <div class="card-content">
        <img class="icon-card" src="{{ $icon }}">
        <hr class="card-hr" />
        <h4 >{{ $title }}</h4>
        <p class="card-description">{{ $description }}</p>
    </div>
</div>
