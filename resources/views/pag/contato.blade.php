<form action="{{ route('contato.store') }}" method="POST">
    @csrf

    <label>Nome</label>
    <input type="text" name="name" class="form-control" required>

    <label>E-mail</label>
    <input type="email" name="email" class="form-control" required>

    <label>Categoria</label>
    <select name="category" class="form-control" required>
        <option value="Dúvida">Dúvida</option>
        <option value="Suporte">Suporte</option>
        <option value="Elogio">Elogio</option>
        <option value="Reclamação">Reclamação</option>
        <option value="Sugestão">Sugestão</option>
    </select>

    <label>Mensagem</label>
    <textarea name="message" class="form-control" required></textarea>

    <button class="btn btn-primary mt-3">Enviar</button>
</form>
