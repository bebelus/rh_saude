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
    @include('health_units.form')
</form>