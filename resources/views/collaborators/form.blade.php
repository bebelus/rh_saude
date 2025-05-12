<div class="form-group">
        
      
    <label for="name" class="form-label">Nome</label>   <input type="text" class="form-control" name="name" value="{{isset($collaborator) ? $collaborator->name : old('name') }}"><br />
    <label for="email">Email</label> <input type="text" name="email" value="{{isset($collaborator) ? $collaborator->email : old('email') }}"><br />
    <label for="cpf">CPF</label>     <input type="text" name="cpf" value="{{isset($collaborator) ? $collaborator->cpf : old('cpf') }}"><br />
    <label for="rg">RG</label>       <input type="text" name="rg" value="{{isset($collaborator->rg) ? $collaborator->rg : old('rg') }}"><br />
    <label for="birth">Nascimento</label> <input type="date" name="birth" value="{{isset($collaborator) ? $collaborator->birth->format('Y-m-d') : old('birth') }}"><br />
    <label for="sex">Sexo</label> <select name="sex">
        <option value="">Selecione</option>
        <option value="F"@if((isset($collaborator) && $collaborator->sex == 'F') || old('sex') == 'F') selected @endif>Feminino</option >
        <option value="M" @if((isset($collaborator) && $collaborator->sex == 'M') || old('sex') == 'M') selected @endif>Masculino</option>
    </select><br />
    <label for="phone">Telefone</label> <input type="text" name="phone" value="{{isset($collaborator) ? $collaborator->phone : old('phone') }}"><br />
    <label for="cellphone">Celular</label> <input type="text" name="cellphone" value="{{isset($collaborator) ? $collaborator->cellphone : old('cellphone') }}"><br />
    <label for="address">Endereço</label> <input type="text" name="address" value="{{isset($collaborator) ? $collaborator->address : old('address') }}"><br />
    <label for="number">Número</label> <input type="text" name="number" value="{{isset($collaborator) ? $collaborator->number : old('number') }}"><br />
    <label for="complement">Complemento</label> <input type="text" name="complement" value="{{isset($collaborator->complement) ? $collaborator->complement : old('complement') }}"><br />
    <label for="city">Cidade</label> <input type="text" name="city" value="{{isset($collaborator) ? $collaborator->city : old('city') }}"><br />
    <label for="state">UF</label> <input type="text" name="state" value="{{isset($collaborator) ? $collaborator->state : old('state') }}"><br />
    <label for="cep">CEP</label> <input type="text" name="cep" value="{{isset($collaborator->cep) ? $collaborator->cep : old('cep') }}"><br />
    </select><br />
    <button type="submit">Salvar</button>
    </div>