<h1>Novo Objeto de contrato (Menalista)</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('monthlies.store') }}" method="POST">
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
        <option value="PLANTONISTA24H"@if(old('tipo') == 'PLANTONISTA24H') selected @endif>PLANTONISTA 24H</option >
        <option value="PLANTONISTA_DIURNO"@if(old('tipo') == 'PLANTONISTA_DIURNO') selected @endif>PLANTONISTA DIURNO</option >
        <option value="PLANTONISTA_NOTURNO"@if(old('tipo') == 'PLANTONISTA_NOTURNO') selected @endif>PLANTONISTA NOTURNO</option >
        <option value="DIARISTA"@if(old('tipo') == 'DIARISTA') selected @endif>DIARISTA</option >
    </select><br />
    <label for="escala">Escala</label> <select name="escala">

        <option value="">Selecione a Escala</option>
        <option value="24x120"@if(old('escala') == '24x120') selected @endif>24x120</option >
        <option value="24x72"@if(old('escala') == '24x72') selected @endif>24x72</option >
        <option value="12x36"@if(old('escala') == '12x36') selected @endif>12x36</option >
        <option value="40H"@if(old('escala') == '40H') selected @endif>40H SEMANAIS</option >
</select><br />
    <label for="salario_base">Salário Base</label> <input type="text" name="salario_base" value=" {{ old('salario_base') }}"><br />
    <label for="custo">Custo</label> <input type="text" name="custo" value=" {{ old('custo') }}"><br />
    <label for="quantidade_postos">Quantidade de Postos</label> <input type="number" name="quantidade_postos" value=" {{ old('quantidade_postos') }}"><br />
    <button type="submit">Salvar</button>
    </div>
</form>