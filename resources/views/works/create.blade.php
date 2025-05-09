

<h1>Novo Vínculo com Unidade</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('works.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label >Colaborador</label> <select name="bond_id"  >
        <option value="">Selecione o Colaborador</option>
        @foreach ($bonds as $bond)
            <option value="{{ $bond->id }}" @if(old('bond_id') == $bond->id) selected @endif>
                {{ $bond->collaborator->name }} - {{ $bond->collaborator->cpf }} - {{isset($bond->monthly_id) ? $bond->monthly->contract->enterprise->fantasia : $bond->hourly->contract->enterprise->fantasia }}</option>
        @endforeach
        </select><br />
        <label for="applicant_id">Aplicante</label> <select name="applicant_id" id="applicant">
        <option value="">Selecione o Aplicante</option>
        @foreach ($applicants as $applicant)
            <option value="{{ $applicant->id }}" @if(old('applicant_id') == $applicant->id) selected @endif>{{ $applicant->name }} - {{ $applicant->cpf }}</option>
        @endforeach
        </select><br />   
        <label for="sector_id">Unidade</label> <select name="sector_id" id="sector_id">
        <option value="">Selecione o Setor da Unidade</option>
        @foreach ($sectors as $sector)
            <option value="{{ $sector->id }}" @if(old('sector_id') == $sector->id) selected @endif>
                {{ $sector->name }} - {{ $sector->healthUnit->name }}</option>
        @endforeach
        </select><br /> 
        <label for="start_date">Data de Início</label> <input type="date" name="start_date"  value="{{ old('start_date') }}"><br />
        <label for="end_date">Data de Fim</label> <input type="date" name="end_date"   value="{{ old('end_date') }}"><br />
        <label for="status">Status</label> <select name="status">
        <option value="">Selecione o Status</option>
        <option value="Ativo" @if(old('status') == 'Ativo') selected @endif>Ativo</option>
        <option value="Férias" @if(old('status') == 'Férias') selected @endif>Férias</option>
        <option value="INSS" @if(old('status') == 'INSS') selected @endif>INSS</option>
        <option value="inativo" @if(old('status') == 'inativo') selected @endif>inativo</option>


        </select><br />

    <button type="submit">Salvar</button>
    </div>
</form>

