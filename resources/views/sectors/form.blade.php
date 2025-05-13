    <div class="form-group">
        
    <label for="health_unit_id">Unidade de Saúde</label> <select name="health_unit_id">
        <option value="">Selecione a Unidade</option>
        @foreach ($health_units as $health_unit)
            <option value="{{ $health_unit->id }}" @if(isset($sector->health_unit_id) && $health_unit->id == $sector->health_unit_id || old('health_unit_id') == $health_unit->id) selected @endif>{{ $health_unit->name }}</option>
        @endforeach

        </select><br />
    
    <label for="name" class="form-label">Nome</label>   <input type="text" class="form-control" name="name" value="{{ isset($sector->name) ? $sector->name : old('name') }}"><br />
    <label for="type">Tipo</label> <select name="type">
        <option value="">Selecione o tipo de funcionameto</option>
        <option value="24hX7d" @if( isset($sector->type) && $sector->type == '24hX7d' || old('type') == '24hX7d') selected @endif >24 HORAS X 7 DIAS</option >
        <option value="24hX5d" @if( isset($sector->type) && $sector->type == '24hX5d' || old('type') == '24hX5d') selected @endif >24 horas x 5 dias</option>
        <option value="12hX7d" @if( isset($sector->type) && $sector->type == '12hX7d' || old('type') == '12hX7d') selected @endif >12 horas x 7 dias</option>
        <option value="12hX5d" @if( isset($sector->type) && $sector->type == '12hX5d' || old('type') == '12hX5d') selected @endif >12 horas x 5 dias</option>
        <option value="08hX5d" @if( isset($sector->type) && $sector->type == '08hX5d' || old('type') == '08hX5d') selected @endif >08 horas x 5 dias</option>
        <option value="OUTROS" @if( isset($sector->type) && $sector->type == 'OUTROS' || old('type') == 'OUTROS') selected @endif >OUTROS HORÁRIOS</option>

    </select><br />
        <label for="description"  class="form-label" style="vertical-align: top">Descrição: </label> <textarea id="description" cols="45" rows="10" class="form-control" name="description">{{ isset($sector->description) ? $sector->description : old('description') }}</textarea><br />

    <button type="submit">Salvar</button>
    </div>
