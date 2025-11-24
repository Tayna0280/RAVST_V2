<h2>Contatos da categoria: {{ $categoria }}</h2>

@foreach ($contatos as $c)
<div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
    <b>{{ $c->name }}</b> ({{ $c->email }})  
    <p>{{ $c->message }}</p>
</div>
@endforeach
