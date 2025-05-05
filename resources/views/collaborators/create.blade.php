<h1>Novo Colaborador</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('collaborators.store') }}" method="POST">
    @csrf
    <div class="form-group">
        
        
    <label for="name" class="form-label">Nome</label>   <input type="text" class="form-control" name="name" value="{{ old('name') }}"><br />
    <label for="email">Email</label> <input type="text" name="email" value="{{ old('email') }}"><br />
    <label for="cpf">CPF</label>     <input type="text" name="cpf" value="{{ old('cpf') }}"><br />
    <label for="rg">RG</label>       <input type="text" name="rg" value="{{ old('rg') }}"><br />
    <label for="birth">Nascimento</label> <input type="date" name="birth" value=" {{ old('birth') }}"><br />
    <label for="sex">Sexo</label> <select name="sex">
        <option value="">Selecione</option>
        <option value="F"@if(old('sex') == 'F') selected @endif>Feminino</option >
        <option value="M" @if(old('sex') == 'M') selected @endif>Masculino</option>
    </select><br />
    <label for="phone">Telefone</label> <input type="text" name="phone" value="{{ old('phone') }}"><br />
    <label for="cellphone">Celular</label> <input type="text" name="cellphone" value="{{ old('cellphone') }}"><br />
    <label for="address">Endereço</label> <input type="text" name="address" value="{{ old('address') }}"><br />
    <label for="number">Número</label> <input type="text" name="number" value="{{ old('number') }}"><br />
    <label for="complement">Complemento</label> <input type="text" name="complement" value="{{ old('complement') }}"><br />
    <label for="city">Cidade</label> <input type="text" name="city" value="{{ old('city') }}"><br />
    <label for="state">UF</label> <input type="text" name="state" value="{{ old('state') }}"><br />
    <label for="cep">CEP</label> <input type="text" name="cep" value="{{ old('cep') }}"><br />
    <label for='applicant'>Solicitante</label> <select name="applicant">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select><br />
    <button type="submit">Salvar</button>
    </div>
</form>