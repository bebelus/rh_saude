<h1>Editando a Unidade de Saúde {{ $health_unit->name }}</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('health_units.update', $health_unit) }}" method="POST">
    @csrf
    @method('PUT')
    @include('health_units.form')
</form>