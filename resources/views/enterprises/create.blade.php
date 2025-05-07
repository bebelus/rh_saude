<h1>Nova Empresa</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('enterprises.store') }}" method="POST">
    @csrf
    <div class="form-group">
        
        
    <label for="razao_social" class="form-label">Razão Social</label>   <input type="text" class="form-control" name="razao_social" value="{{ old('razao_social') }}"><br />
    <label for="fantasia" class="form-label">Nome Fantasia</label>   <input type="text" class="form-control" name="fantasia" value="{{ old('fantasia') }}"><br />
    <label for="cnpj">CNPJ</label>     <input type="text" name="cnpj" value="{{ old('cnpj') }}"><br />
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