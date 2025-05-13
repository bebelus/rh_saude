<h1>Editando o Contrato número {{ $contract->contract_number }}</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('contracts.update', $contract) }}" method="POST">
    @csrf
    @method('PUT')
    @include('contracts.form')
</form>