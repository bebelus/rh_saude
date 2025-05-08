<h1>Novo Contrato</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('contracts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        
    <label for="enterprise_id">Empresa</label> <select name="enterprise_id">
        <option value="">Selecione a Empresa</option>
        @foreach ($enterprises as $enterprise)
            <option value="{{ $enterprise->id }}" @if(old('enterprise_id') == $enterprise->id) selected @endif>{{ $enterprise->razao_social }}</option>
        @endforeach

        </select><br />
    
    <label for="contract_number" class="form-label">Número do contrato</label>   <input type="text" class="form-control" name="contract_number" value="{{ old('contract_number') }}"><br />
    <label for="start_date">Data de Inicio</label> <input type="date" name="start_date" value=" {{ old('start_date') }}"><br />
    <label for="end_date">Data de Fim</label> <input type="date" name="end_date" value=" {{ old('end_date') }}"><br />
    <label for="total_value">Valor Total</label> <input type="text" name="total_value" value=" {{ old('total_value') }}"><br />
    <label for="teto_mensal">Teto Mensal</label> <input type="text" name="teto_mensal" value=" {{ old('teto_mensal') }}"><br />
    <label for="status">Status</label> <select name="status">
        <option value="">Selecione o Status</option>
        <option value="Em Vigência" @if(old('status') == 'Em Vigência') selected @endif>Em Vigência</option>
        <option value="Vencido" @if(old('status') == 'Vencido') selected @endif>Vencido</option>
        <option value="Inativo" @if(old('status') == 'Inativo') selected @endif>Inativo</option>
    </select><br />
    <label for="description" class="form-label">Descrição</label> <textarea class="form-control" name="description" value="{{ old('description') }}"></textarea><br />

    <button type="submit">Salvar</button>
    </div>
</form>