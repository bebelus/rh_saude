<h1>Novo Objeto de contrato (Horista)</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('hourlies.store') }}" method="POST">
    @csrf
    <div class="form-group">
        
    <label for="contract_id">Contrato</label> <select name="contract_id">
        <option value="">Selecione a Empresa</option>
        @foreach ($contracts as $conract)
            <option value="{{ $conract->id }}" @if(old('conract_id') == $conract->id) selected @endif>{{ $conract->contract_number }} - {{ $conract->enterprise->razao_social }}</option>
        @endforeach

        </select><br />
    
    <label for="name" class="form-label">Nome da Função</label>   <input type="text" class="form-control" name="name" value="{{ old('name') }}"><br />
    <label for="tipo">Tipo</label> <select name="tipo">

        <option value="">Selecione o Tipo</option>
        <option value="PLANTONISTA"@if(old('tipo') == 'PLANTONISTA') selected @endif>PLANTONISTA</option >
        <option value="ROTINA"@if(old('tipo') == 'ROTINA') selected @endif>ROTINA</option >
        <option value="ESPECIALISTA"@if(old('tipo') == 'ESPECIALISTA') selected @endif>ESPECIALISTA</option >
        <option value="TECNICO"@if(old('tipo') == 'TECNICO') selected @endif>TECNICO</option >
        <option value="DIREÇÃO"@if(old('tipo') == 'DIREÇÃO') selected @endif>DIREÇÃO</option >
        <option value="COORDENAÇÃO"@if(old('tipo') == 'COORDENAÇÃO') selected @endif>COORDENAÇÃO</option >
        <option value="OUTROS"@if(old('tipo') == 'OUTROS') selected @endif>OUTROS</option >
    </select><br />
    <label for="horas_totais">Horas Totais</label> <input type="text" name="horas_totais" value=" {{ old('horas_totais') }}"><br />
    <label for="horas_mensais">Horas Mensais</label> <input type="text" name="horas_mensais" value=" {{ old('horas_mensais') }}"><br />
    <label for="salario_hora">Salário Hora</label> <input type="text" name="salario_hora" value=" {{ old('salario_hora') }}"><br />
    <label for="custo_hora">Custo Hora</label> <input type="text" name="custo_hora" value=" {{ old('custo_hora') }}"><br />
    <label for="horas_usadas">Horas Usadas</label> <input type="text" name="horas_usadas" value=" {{ old('horas_usadas') }}"><br />
    <button type="submit">Salvar</button>
    </div>
</form>