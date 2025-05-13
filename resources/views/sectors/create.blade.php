<h1>Novo Setor</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('sectors.store') }}" method="POST">
    @csrf
    @include('sectors.form')
</form>