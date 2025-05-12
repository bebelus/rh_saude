


    <div class="form-group">
        
        
    <label for="name" class="form-label">Nome</label>   <input type="text" class="form-control" name="name" value="{{isset($health_unit->name) ? $health_unit->name : old('name') }}"><br />
    <label for="fantasia" class="form-label">Nome Fantasia</label>   <input type="text" class="form-control" name="fantasia" value="{{ isset($health_unit->fantasia) ? $health_unit->fantasia : old('fantasia') }}"><br />
    <label for="cnes">CNES</label> <input type="text" name="cnes" value="{{ isset($health_unit->cnes) ? $health_unit->cnes : old('cnes') }}"><br />
    <label for="cnpj">CNPJ</label>     <input type="text" name="cnpj" value="{{ isset($health_unit->cnpj) ? $health_unit->cnpj : old('cnpj') }}"><br />
    <label for="type">Tipo</label> <select name="type">
        <option value="">Selecione</option>
        <option value="HOSPITAL"@if( (isset($health_unit->type) && $health_unit->type == 'HOSPITAL') || old('type')=='HOSPITAL') selected @endif>HOSPITAL</option >
        <option value="UPH" @if( (isset($health_unit->type) && $health_unit->type == 'UPH') || old('type')=='UPH') selected @endif>UPH</option>
        <option value="UPA" @if( (isset($health_unit->type) && $health_unit->type == 'UPA') || old('type')=='UPA') selected @endif>UPA</option>
        <option value="UBS" @if( (isset($health_unit->type) && $health_unit->type == 'UBS') || old('type')=='UBS') selected @endif>UBS</option>
        <option value="USF" @if( (isset($health_unit->type) && $health_unit->type == 'USF') || old('type')=='USF') selected @endif>USF</option>
        <option value="SMS" @if( (isset($health_unit->type) && $health_unit->type == 'SMS') || old('type')=='SMS') selected @endif>SMS</option>

    </select><br />
    <label for="email">Email</label> <input type="text" name="email" value="{{ isset($health_unit->email) ? $health_unit->email : old('email') }}"><br />
    <label for="phone">Telefone</label> <input type="text" name="phone" value="{{ isset($health_unit->phone) ? $health_unit->phone : old('phone') }}"><br />
    <label for="cellphone">Celular</label> <input type="text" name="cellphone" value="{{ isset($health_unit->cellphone) ? $health_unit->cellphone : old('cellphone') }}"><br />
    <label for="address">Endereço</label> <input type="text" name="address" value="{{ isset($health_unit->address) ? $health_unit->address : old('address') }}"><br />
    <label for="number">Número</label> <input type="text" name="number" value="{{ isset($health_unit->number) ? $health_unit->number : old('number') }}"><br />
    <label for="complement">Complemento</label> <input type="text" name="complement" value="{{ isset($health_unit->complement) ? $health_unit->complement : old('complement') }}"><br />
    <label for="city">Cidade</label> <input type="text" name="city" value="{{ isset($health_unit->city) ? $health_unit->city : old('city') }}"><br />
    <label for="state">UF</label> <input type="text" name="state" value="{{ isset($health_unit->state) ? $health_unit->state : old('state') }}"><br />
    <label for="cep">CEP</label> <input type="text" name="cep" value="{{ isset($health_unit->cep) ? $health_unit->cep : old('cep') }}"><br />
    <button type="submit">Salvar</button>
    </div>
