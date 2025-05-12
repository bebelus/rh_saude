
<h1>Visualizando a Unidade de Saúde {{ $health_unit->name }}</h1>

<p>Nome Fantasia: {{ $health_unit->fantasia }} </p>
<p> CNES: {{ $health_unit->cnes }} </p>
<p> CNPJ: {{ $health_unit->cnpj }} </p>
<p> Telefone: {{ $health_unit->phone }} </p>
<p> Celular: {{ $health_unit->cellphone }} </p>
<p> Email: {{ $health_unit->email }} </p>
<p> Endereço: {{ $health_unit->address }} </p>
<p> Numero: {{ $health_unit->number }} </p>
<p> Complemento: {{ $health_unit->complement }} </p>
<p> Cidade: {{ $health_unit->city }} </p>
<p> Estado: {{ $health_unit->state }} </p>
<p> CEP: {{ $health_unit->cep }} </p>

<a href="/health_units/{{ $health_unit->id }}/edit" class="btn btn-primary">Editar</a>