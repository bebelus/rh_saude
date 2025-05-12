

    <div class="form-group">
        
        
    <label for="razao_social" class="form-label">Razão Social</label>   <input type="text" class="form-control" name="razao_social" value="{{isset($enterprise->razao_social) ? $enterprise->razao_social : old('razao_social') }}"><br />
    <label for="fantasia" class="form-label">Nome Fantasia</label>   <input type="text" class="form-control" name="fantasia" value="{{isset($enterprise->fantasia) ? $enterprise->fantasia : old('fantasia') }}"><br />
    <label for="cnpj">CNPJ</label>     <input type="text" name="cnpj" value="{{ isset($enterprise->cnpj) ? $enterprise->cnpj : old('cnpj') }}"><br />
    <label for="email">Email</label> <input type="text" name="email" value="{{ isset($enterprise->email) ? $enterprise->email : old('email') }}"><br />
    <label for="phone">Telefone</label> <input type="text" name="phone" value="{{ isset($enterprise->phone) ? $enterprise->phone : old('phone') }}"><br />
    <label for="cellphone">Celular</label> <input type="text" name="cellphone" value="{{ isset($enterprise->cellphone) ? $enterprise->cellphone : old('cellphone') }}"><br />
    <label for="address">Endereço</label> <input type="text" name="address" value="{{ isset($enterprise->address) ? $enterprise->address : old('address') }}"><br />
    <label for="number">Número</label> <input type="text" name="number" value="{{ isset($enterprise->number) ? $enterprise->number : old('number') }}"><br />
    <label for="complement">Complemento</label> <input type="text" name="complement" value="{{ isset($enterprise->complement) ? $enterprise->complement : old('complement') }}"><br />
    <label for="city">Cidade</label> <input type="text" name="city" value="{{ isset($enterprise->city) ? $enterprise->city : old('city') }}"><br />
    <label for="state">UF</label> <input type="text" name="state" value="{{ isset($enterprise->state) ? $enterprise->state : old('state') }}"><br />
    <label for="cep">CEP</label> <input type="text" name="cep" value="{{ isset($enterprise->cep) ? $enterprise->cep : old('cep') }}"><br />
    <button type="submit">Salvar</button>
    </div>
