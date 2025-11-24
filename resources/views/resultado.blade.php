@extends('layouts.site')

@section('title', 'Resultado do Formulário')

@section('content')
<h2>Dados Recebidos</h2>

@if($data)
    <ul class="list-group mt-4">
        <li class="list-group-item"><strong>Nome:</strong> {{ $data['name'] }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $data['email'] }}</li>
        <li class="list-group-item"><strong>Categoria:</strong> {{ $data['category'] }}</li>
        <li class="list-group-item"><strong>Mensagem:</strong> {{ $data['message'] }}</li>
    </ul>
@else
    <div class="alert alert-warning mt-4">
        Nenhum dado foi enviado.
    </div>
@endif

@endsection
