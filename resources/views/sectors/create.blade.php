<h1>Novo Setor</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('sectors.store') }}" method="POST">
    @csrf
    <div class="form-group">
        
    <label for="health_unit_id">Unidade de Saúde</label> <select name="health_unit_id">
        <option value="">Selecione a Unidade</option>
        @foreach ($health_units as $health_unit)
            <option value="{{ $health_unit->id }}" @if(old('health_unit_id') == $health_unit->id) selected @endif>{{ $health_unit->name }}</option>
        @endforeach

        </select><br />
    
    <label for="name" class="form-label">Nome</label>   <input type="text" class="form-control" name="name" value="{{ old('name') }}"><br />
    <label for="description" class="form-label">Descrição</label>   <input type="text" class="form-control" name="description" value="{{ old('description') }}"><br />
    <label for="type">Tipo</label> <select name="type">
        <option value="">Selecione a Unidade</option>
        <option value="24H"@if(old('type') == '24H') selected @endif>24 HORAS</option >
        <option value="12H" @if(old('type') == 'UPH') selected @endif>UPH</option>
        <option value="UPA" @if(old('type') == 'UPA') selected @endif>UPA</option>
        <option value="UBS" @if(old('type') == 'UBS') selected @endif>UBS</option>
        <option value="USF" @if(old('type') == 'USF') selected @endif>USF</option>
        <option value="SMS" @if(old('type') == 'SMS') selected @endif>SMS</option>

    </select><br />
    <button type="submit">Salvar</button>
    </div>
</form>