<!-- resources/views/layouts/app.blade.php 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   </title>

     Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

     Inclui a navbar 
    @include('pag.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

  Bootstrap JS 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>-->


@extends('layouts.site')

@section('title', 'Início - RAVST Web Solutions')

@section('content')
<div class="text-center my-5">
    <h1 class="fw-bold">Transformamos ideias em sites que funcionam</h1>
    <p class="lead mt-3">Design criativo, desenvolvimento confiável e resultados reais para o seu negócio.</p>
    <a href="{{ route('contato') }}" class="btn btn-primary btn-lg mt-4">Peça um orçamento</a>
</div>

<!-- Seção de Serviços -->
<div class="container my-5">
    <h2 class="text-center mb-4 fw-semibold">Nossos Serviços</h2>
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <i class="bi bi-code-slash display-4 text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Desenvolvimento de Sites</h5>
                    <p class="card-text">Criamos sites modernos, responsivos e personalizados para o seu negócio.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <i class="bi bi-brush display-4 text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Design e Identidade Visual</h5>
                    <p class="card-text">Layout criativo e profissional, alinhado à identidade da sua marca.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <i class="bi bi-gear display-4 text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Manutenção e Suporte</h5>
                    <p class="card-text">Oferecemos acompanhamento e atualizações para manter seu site sempre no ar.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Seção Sobre (resumo) -->
<div class="bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-semibold mb-3">Sobre a RAVST Web Solutions</h2>
        <p class="mx-auto" style="max-width: 700px;">
            Somos uma equipe dedicada ao desenvolvimento de soluções digitais criativas.
            Nosso objetivo é ajudar empresas e pessoas a fortalecer sua presença online com sites modernos e funcionais.
        </p>
        <a href="{{ route('sobre') }}" class="btn btn-outline-primary mt-3">Saiba mais</a>
    </div>
</div>

<!-- Seção Chamada final -->
<div class="text-center my-5">
    <h3 class="fw-bold">Pronto para levar seu projeto ao próximo nível?</h3>
    <p class="mt-2">Entre em contato com nossa equipe e solicite um orçamento personalizado.</p>
    <a href="{{ route('contato') }}" class="btn btn-primary btn-lg mt-3">Fale Conosco</a>
</div>

@endsection

