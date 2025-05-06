<h1>Nova Unidade de Saúde</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('health_units.store') }}" method="POST">
    @csrf
    <div class="form-group">
        
        
    <label for="name" class="form-label">Nome</label>   <input type="text" class="form-control" name="name" value="{{ old('name') }}"><br />
    <label for="fantasia" class="form-label">Nome Fantasia</label>   <input type="text" class="form-control" name="fantasia" value="{{ old('fantasia') }}"><br />
    <label for="cnes">CNES</label> <input type="text" name="cnes" value="{{ old('cnes') }}"><br />
    <label for="cnpj">CNPJ</label>     <input type="text" name="cnpj" value="{{ old('cnpj') }}"><br />
    <label for="type">Tipo</label> <select name="type">
        <option value="">Selecione</option>
        <option value="HOSPITAL"@if(old('type') == 'HOSPITAL') selected @endif>HOSPITAL</option >
        <option value="UPH" @if(old('type') == 'UPH') selected @endif>UPH</option>
        <option value="UPA" @if(old('type') == 'UPA') selected @endif>UPA</option>
        <option value="UBS" @if(old('type') == 'UBS') selected @endif>UBS</option>
        <option value="USF" @if(old('type') == 'USF') selected @endif>USF</option>
        <option value="SMS" @if(old('type') == 'SMS') selected @endif>SMS</option>

    </select><br />
    <label for="email">Email</label> <input type="text" name="email" value="{{ old('email') }}"><br />
    <label for="phone">Telefone</label> <input type="text" name="phone" value="{{ old('phone') }}"><br />
    <label for="cellphone">Celular</label> <input type="text" name="cellphone" value="{{ old('cellphone') }}"><br />
    <label for="address">Endereço</label> <input type="text" name="address" value="{{ old('address') }}"><br />
    <label for="number">Número</label> <input type="text" name="number" value="{{ old('number') }}"><br />
    <label for="complement">Complemento</label> <input type="text" name="complement" value="{{ old('complement') }}"><br />
    <label for="city">Cidade</label> <input type="text" name="city" value="{{ old('city') }}"><br />
    <label for="state">UF</label> <input type="text" name="state" value="{{ old('state') }}"><br />
    <label for="cep">CEP</label> <input type="text" name="cep" value="{{ old('cep') }}"><br />
    <button type="submit">Salvar</button>
    </div>
</form>