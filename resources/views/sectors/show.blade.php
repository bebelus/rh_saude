<h1>Detalhes do Setor {{ $sector->name }} </h1>
<p>Tipo: {{ $sector->type }}</p>
<p>Unidade Pertecente: {{ $sector->healthUnit->name }}</p>
<p>Descrição: {{ $sector->description }}</p>

<a href="/sectors/{{ $sector->id }}/edit" class="btn btn-primary">Editar</a>