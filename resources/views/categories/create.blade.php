<!DOCTYPE html>
<html>
<head>
    <title>Criar Categoria</title>
</head>
<body>
    <h1>Criar Nova Categoria</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label><h3>Nome:</h3></label>
        <input type="text" name="name" required>
        <br>
        <label><h3>Descrição:</h3></label>
        <textarea name="description"></textarea>
        <br><br>
        <button type="submit">Salvar</button>
    </form>
    <br>
    <a href="{{ route('categories.index') }}">Voltar</a>
</body>
</html>
