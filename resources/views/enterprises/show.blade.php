
<h1> Empresa {{ $enterprise->razao_social }} </h1>

<p> Nome Fantasia: {{ $enterprise->fantasia }} </p>
<p> CNPJ: {{ $enterprise->cnpj }} </p>
<p> Telefone: {{ $enterprise->phone }} </p>
<p> Celular: {{ $enterprise->cellphone }} </p>
<p> Email: {{ $enterprise->email }} </p>
<p> Endereço: {{ $enterprise->address }} </p>
<p> Numero: {{ $enterprise->number }} </p>
<p> Complemento: {{ $enterprise->complement }} </p>
<p> Cidade: {{ $enterprise->city }} </p>
<p> Estado: {{ $enterprise->state }} </p>
<p> CEP: {{ $enterprise->cep }} </p>

<a href="/enterprises/{{ $enterprise->id }}/edit" class="btn btn-primary">Editar</a>