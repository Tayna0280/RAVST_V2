@extends('layouts.site')

@section('title', 'Contato - RAVST Web Solutions')

@section('content')
<h2>Entre em Contato</h2>
<p>Preencha o formulário ou fale diretamente com a equipe da RAVST Web Solutions.</p>

<form class="mt-4" action="{{ route('contato.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="name" placeholder="Seu nome completo" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
    </div>

    <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <select class="form-control" id="categoria" name="category" required>
            <option value="">Selecione uma categoria</option>
            <option value="Dúvida">Dúvida</option>
            <option value="Sugestão">Sugestão</option>
            <option value="Suporte">Suporte</option>
            <option value="Projeto">Projeto</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="message" rows="4" placeholder="Escreva sua mensagem" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</form>


@endsection
