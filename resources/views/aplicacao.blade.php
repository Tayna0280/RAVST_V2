@extends('layouts.site')

@section('title', 'Aplicações - RAVST Web Solutions')

@section('content')
<h2>Aplicações e Projetos</h2>
<p>Desenvolvemos soluções sob medida para diferentes tipos de negócios. Veja como aplicamos nossa experiência:</p>

<div class="row mt-4">
  <div class="col-md-5 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <h1 class="card-title">O que é o aplicativo?</h1>
        <p class="card-text">
            Este aplicativo é uma ferramenta de comunicação alternativa desenvolvida especialmente para pessoas com autismo,
             pessoas não verbais, com dificuldades de fala ou com limitações na comunicação oral. 
             Ele permite que o usuário selecione imagens organizadas por categorias (como água, comida, brincar, banho, do
             rmir e assistir) e, ao tocar em cada opção, o aplicativo fala em voz alta o que foi escolhido.
        </p>

        <p class="card-text">
            O objetivo principal é facilitar a comunicação do usuário com familiares, professores ou cuidadores
             de forma simples, rápida e intuitiva. Cada categoria possui subcategorias ilustradas com imagens grandes
              e coloridas, ajudando na compreensão visual, reduzindo frustrações e aumentando a autonomia.
        </p>

        <p class="card-text">
            O app foi projetado para ser extremamente fácil de usar, com botões grandes, 
            cores chamativas e imagens claras, considerando necessidades sensoriais e acessibilidade para 
            pessoas com TEA (Transtorno do Espectro Autista).
        </p>

        <h5 class="card-title">Público-alvo</h5>
        <p class="card-text">Este aplicativo é destinado a pessoas que apresentam dificuldades na comunicação verbal, especialmente:</p>
        <p class="card-text">•	Pessoas com Transtorno do Espectro Autista (TEA);</p>
        <p class="card-text">•	Crianças ou adultos não verbais;</p>
        <p class="card-text">•	Pessoas com atraso de fala ou dificuldades motoras na comunicação;</p>
        <p class="card-text">•	Indivíduos que utilizam Comunicação Alternativa e Aumentativa (CAA);</p>
        <p class="card-text">•	Familiares, cuidadores, terapeutas e professores que utilizam recursos visuais para apoiar a comunicação.</p>
              



      </div>
    </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card h-100">
      <div class="card-body">
        
        <video width="250" controls>
          <source src="{{ asset('video/teste_02.mp4') }}" type="video/mp4">
            Seu navegador não suporta vídeo HTML5.
        </video>
        
      </div>
    </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card h-100">
      <div class="card-body">
      
        <video width="250" controls>
          <source src="{{ asset('video/teste_02.mp4') }}" type="video/mp4">
            Seu navegador não suporta vídeo HTML5.
        </video>
        
      </div>
    </div>
  </div>
</div>
@endsection
