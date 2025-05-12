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
    @include('collaborators.form')
</form>