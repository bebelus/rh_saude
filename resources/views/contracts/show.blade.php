<h1>Visualizando informações do Contrato número {{ $contract->contract_number }}</h1>

<p>Empresa: {{ $contract->enterprise->razao_social }} </p>
<p>Início do contrato {{ $contract->start_date->format('d/m/Y') }} </p>
<p>Valor Total do contrato: {{ $contract->Total_value }} </p>
<p>Teto Mensal: {{ $contract->teto_mensal }} </p>
<p>Status: {{ $contract->status }} </p>
<p>Descrição: {{ $contract->description }} </p>

<a href="/contracts/{{ $contract->id }}/edit" class="btn btn-primary">Editar</a>
