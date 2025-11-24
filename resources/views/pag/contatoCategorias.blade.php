<h2>Categorias de Contato</h2>

<ul>
@foreach ($categorias as $cat)
    <li>
        <a href="{{ route('contato.ver', $cat->category) }}">
            {{ $cat->category }}
        </a>
    </li>
@endforeach
</ul>
