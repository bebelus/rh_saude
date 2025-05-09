<h1>Novo Vínculo de Colaborador</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('bonds.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="collaborator_id">Colaborador</label> <select name="collaborator_id">
        <option value="">Selecione o Colaborador</option>
        @foreach ($collaborators as $collaborator)
            <option value="{{ $collaborator->id }}" @if(old('collaborator_id') == $collaborator->id) selected @endif>{{ $collaborator->name }} - {{ $collaborator->cpf }}</option>
        @endforeach
        </select><br />
        <label for="applicant_id">Aplicante</label> <select name="applicant_id">
        <option value="">Selecione o Aplicante</option>
        @foreach ($applicants as $applicant)
            <option value="{{ $applicant->id }}" @if(old('applicant_id') == $applicant->id) selected @endif>{{ $applicant->name }} - {{ $applicant->cpf }}</option>
        @endforeach
        </select><br />   
        <label for="hourly_id">Função Horista</label> <select name="hourly_id">
        <option value="{{$null}}">Selecione a Função Horista</option>
        @foreach ($hourlies as $hourly)
            <option value="{{ $hourly->id }}" @if(old('hourly_id') == $hourly->id) selected @endif>{{ $hourly->name }} - {{ $hourly->horas_mensais }} Horas</option>
        @endforeach
        </select><br />
        <label for="monthly_id">Função Mensalista</label> <select name="monthly_id">
        <option value="{{$null}}">Selecione a Função Mensalista</option>
        @foreach ($monthlies as $monthly)
            <option value="{{ $monthly->id }}" @if(old('monthly_id') == $monthly->id) selected @endif>{{ $monthly->name }} - {{ $monthly->escala }} Horas</option>
        @endforeach
        </select><br />
        <label for="start_date">Data de Início</label> <input type="date" name="start_date" value="{{ old('start_date') }}"><br />
        <label for="end_date">Data de Fim</label> <input type="date" name="end_date" value="{{ old('end_date') }}"><br />
        <label for="hora_vinculo">Horas de Vínculo</label> <input type="number" name="hora_vinculo" value="{{ old('hora_vinculo') }}"><br />
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