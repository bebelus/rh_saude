
    <div class="form-group">
        
    <label for="enterprise_id">Empresa</label> <select name="enterprise_id">
        <option value="">Selecione a Empresa</option>
        @foreach ($enterprises as $enterprise)
            <option value="{{ $enterprise->id }}" @if(isset($contract) && $contract->enterprise_id == $enterprise->id || old('enterprise_id') == $enterprise->id) selected @endif >{{ $enterprise->razao_social }}</option>
        @endforeach

        </select><br />
    
    <label for="contract_number" class="form-label">Número do contrato</label>   <input type="text" class="form-control" name="contract_number" value="{{ isset($contract->contract_number) ? $contract->contract_number : old('contract_number') }}"><br />
    <label for="start_date">Data de Inicio</label> <input type="date" name="start_date" value="{{ isset($contract->start_date) ? $contract->start_date->format('Y-m-d') : old('start_date') }}"><br />
    <label for="end_date">Data de Fim</label> <input type="date" name="end_date" value="{{ isset($contract->end_date) ? $contract->end_date->format('Y-m-d') : old('end_date') }}"><br />
    <label for="total_value">Valor Total</label> <input type="text" name="total_value" value="{{ isset($contract->total_value) ? $contract->total_value : old('total_value') }}"><br />
    <label for="teto_mensal">Teto Mensal</label> <input type="text" name="teto_mensal" value="{{ isset($contract->teto_mensal) ? $contract->teto_mensal : old('teto_mensal') }}"><br />
    <label for="status">Status</label> <select name="status">
        <option value="">Selecione o Status</option>
        <option value="Em Vigência" @if(isset($contract) && $contract->status == 'Em Vigência' || old('status') == 'Em Vigência') selected @endif>Em Vigência</option>
        <option value="Vencido" @if( isset($contract) && $contract->status == 'Vencido' || old('status') == 'Vencido') selected @endif>Vencido</option>
        <option value="Inativo" @if( isset($contract) && $contract->status == 'Inativo' || old('status') == 'Inativo') selected @endif>Inativo</option>
    </select><br />
    <label for="description" class="form-label">Descrição</label> <textarea class="form-control" name="description">{{ isset($contract->description) ? $contract->description : old('description') }}</textarea><br />

    <button type="submit">Salvar</button>
    </div>
