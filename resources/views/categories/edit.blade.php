<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <br><br>
        <input type="text" name="name" value="{{ $category->name }}" required>
        <br>
        <label>Descrição:</label>
        <textarea name="description">{{ $category->description }}</textarea>
        <br>
        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('categories.index') }}">Voltar</a>
</body>
</html>
