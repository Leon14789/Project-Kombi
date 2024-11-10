@extends('layouts.baseLayout')

@section('title', 'NOME DA EMPRESA')

@section('content')

<x-carousel />

<section class="section">
    <div class="container">
        <hr class="hrSection" />
        <h4>A farmácia de manipulação <br /><strong>sob medida para você e seu pet</strong></h4>
        <hr class="hrSection" />
    </div>
    <div class="cards-container">
        <x-card
            path="/assets/images/section/img1.png"
            title="Título do Card"
            icon="/assets/images/icons/icon6.svg"
            description="Descrição do Card. Aqui vai um texto explicativo sobre o conteúdo do card." />
        <x-card
            path="/assets/images/section/img2.png"
            icon="/assets/images/icons/icon9.svg"
            title="Título do Card"
            description="Descrição do Card. Aqui vai um texto explicativo sobre o conteúdo do card." />
        <x-card
            path="/assets/images/section/img3.png"
            icon="/assets/images/icons/icon2.svg"
            title="Título do Card"
            description="Descrição do Card. Aqui vai um texto explicativo sobre o conteúdo do card." />
        <x-card
            path="/assets/images/section/img4.png"
            icon="/assets/images/icons/icon10.svg"
            title="Título do Card"
            description="Descrição do Card. Aqui vai um texto explicativo sobre o conteúdo do card." />
        <x-card
            path="/assets/images/section/img5.png"
            icon="/assets/images/icons/icon1.svg"
            title="Título do Card"
            description="OK Descrição do Card. Aqui vai um texto explicativo sobre o conteúdo do card." />
        <x-card
            path="/assets/images/section/img6.png"
            icon="/assets/images/icons/icon5.svg"
            title="Título do Card"
            description="Descrição do Card. Aqui vai um texto explicativo sobre o conteúdo do card." />
    </div>

    <container class="mt-4 mb-4">
        <ul class="nav">
            <li class="button">
                Solicite um orçamento
            </li>
        </ul>
    </container>

</section>

<section class="banner-section">
    <img src="/assets/images/banners/defaltBanner2.png" alt="Banner" class="banner-image" />
</section>

<section class="content-section">
    <div class="left-content">
        <h2 class="content-title">Nosso maior compromisso é</h2>
        <h2 class="content-title"><strong>com o seu bem-estar</strong></h2>
        <p class="content-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pulvinar, neque ac molestie luctus, dolor purus volutpat magna, ac placerat leo enim euismod odio. In erat risus, auctor ut viverra ac, rutrum id orci. Donec pellentesque leo in tempus ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh. </p>
        <p class="content-description"> Etiam at tincidunt mauris. Nulla eleifend odio sed aliquam gravida. Phasellus placerat elit ac nisi tempor, eu rhoncus arcu accumsan. Donec felis velit, ultrices pretium velit in, ultricies lacinia nisl. Quisque tempus quis turpis eu luctus.</p>
        <container class="mt-4 mb-4">
            <ul class="nav">
                <li class="button">
                    Solicite um orçamento
                </li>
            </ul>
        </container>
    </div>

    <div class="right-content">
        <img src="/assets/images/icons/sectionIcon2.png" alt="Imagem 2" class="right-image">
        <img src="/assets/images/icons/sectionIcon.png" alt="Imagem 1" class="right-image">
        <img src="/assets/images/banners/bannerPrancheta.png" alt="Imagem 3" class="right-image-large">
    </div>
</section>
<section class="section-container">
    <div class="image-container"> <img class="image-container-section" src="assets/images/banners/Prancheta 8.png" alt="Descrição da Imagem"> </div>
    <div class="content-container">
        <h1>À sua saúde. Tradição e inovação.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pulvinar, neque ac molestie luctus, dolor purus volutpat magna, ac placerat leo enim euismod odio.</p>
        <p> In erat risus, auctor ut viverra ac, rutrum id orci. Donec pellentesque leo in tempus ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh.</p>
        <ul class="nav">
            <li class="button">
                Solicite um orçamento
            </li>
        </ul>
    </div>
</section>
<section class="section-container2">
    <div class="accordion-container">
        <h2>Ficou com alguma <strong>dúvida</strong>?</h2> <button class="accordion">Pergunta 1 <span class="icon"><img src="/assets/images/icons/icon7.svg" alt="" /></span></button>
        <div class="accordion-content">
            <p>Resposta para a Pergunta 1</p>
        </div> <button class="accordion">Pergunta 2 <span class="icon"><img src="/assets/images/icons/icon7.svg" alt="" /></span></button>
        <div class="accordion-content">
            <p>Resposta para a Pergunta 2</p>
        </div> <button class="accordion">Pergunta 3 <span class="icon"><img src="/assets/images/icons/icon7.svg" alt="" /></span></button>
        <div class="accordion-content">
            <p>Resposta para a Pergunta 3</p>
        </div>
    </div>
    <div class="image-container"> <img src="/assets/images/banners/bannerPrancheta-9.png" alt="Descrição da Imagem"> </div>
</section>

<section class="section-container">
    <div class="image-container-form"> <img src="assets/images/banners/Prancheta 10.png" alt="Descrição da Imagem"> </div>
    <div class="form-container">
        <h1>Solicite um orçamento personalizado</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce <br /> pulvinar, neque ac molestie luctus, dolor purus.</p>
        <form action="/generateOrca" method="post">
            <label>Seu nome</label>
            <input class="input-form" type="text" name="name" placeholder="Digite seu nome completo">
            <label>E-mail</label>
            <input class="input-form" type="email" name="email" placeholder="Digite seu melhor e-mail">
            <label>Celular</label>
            <input class="input-form" type="text" name="phone" placeholder="Digite seu telefone">
            <button class="button-form" type="submit">Enviar</button>
        </form>
    </div>
</section>

 





<style>



</style>
@endsection