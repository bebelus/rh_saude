
<h1>Informações do Colaborador {{ $collaborator->name }}</h1>

<p>CPF: {{ $collaborator->cpf }}</p>
@if(isset($collaborator->rg))
<p>RG: {{ $collaborator->rg }}</p>
@endif
<p>Nascimento: {{ $collaborator->birth->format('d/m/Y') }} - Sexo: {{ $collaborator->sex }}</p>
<p>Telefone: {{ $collaborator->phone }}  - Celular: {{ $collaborator->cellphone }}</p>
<p>Endereço: {{ $collaborator->address }}</p>
<p>Numero: {{ $collaborator->number }}</p>
<p>Complemento: {{ $collaborator->complement }}</p>
<P>CEP: {{ $collaborator->cep }}</P>
<p>Email: {{ $collaborator->email }}</p>

<a href="/collaborators/{{ $collaborator->id }}/edit" class="btn btn-primary">Editar</a>