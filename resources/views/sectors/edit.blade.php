<h1>Editando o setor {{ $sector->name }}</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('sectors.update', $sector) }}" method="POST">
    @csrf
    @method('PUT')
    @include('sectors.form')
</form>