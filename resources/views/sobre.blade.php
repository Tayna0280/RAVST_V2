@extends('layouts.site')

@section('title', 'Sobre - RAVST Web Solutions')

@section('content')

<div class="container py-5">
    <h1 class="text-center fw-bold mb-4">Sobre a RAVST Web Solutions</h1>

    <p class="lead text-center mb-5">
        A <strong>RAVST Web Solutions</strong> nasceu com o propósito de transformar ideias em soluções digitais.
        Somos uma equipe dedicada, criativa e apaixonada por tecnologia.
    </p>

    <div class="row align-items-center">
        <div class="col-md-6">
            <h4 class="fw-semibold">Nossa missão</h4>
            <p>
                Desenvolver sites modernos, acessíveis e funcionais, ajudando empresas e profissionais a
                fortalecer sua presença online e alcançar novos clientes.
            </p>

            <h4 class="fw-semibold mt-4">Nossa visão</h4>
            <p>
                Ser reconhecida como uma equipe referência em soluções web criativas e de qualidade,
                valorizando a inovação e a experiência do usuário.
            </p>

            <h4 class="fw-semibold mt-4">Nossos valores</h4>
            <ul>
                <li>Comprometimento com o cliente</li>
                <li>Qualidade e inovação</li>
                <li>Trabalho em equipe</li>
                <li>Ética e transparência</li>
            </ul>
        </div>

        <div class="col-md-6 text-center">
            <img src="https://cdn.pixabay.com/photo/2018/01/31/09/18/web-3120321_1280.png" 
                 alt="Equipe RAVST" class="img-fluid rounded shadow">
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('contato') }}" class="btn btn-primary btn-lg">Entre em contato conosco</a>
    </div>
</div>
@endsection
