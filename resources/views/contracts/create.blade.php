<h1>Novo Contrato</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('contracts.store') }}" method="POST">
    @csrf
    @include('contracts.form')
</form>