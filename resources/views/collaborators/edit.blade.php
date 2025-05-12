<h1>Editar Colaborador {{ $collaborator->name }}</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('collaborators.update', $collaborator) }}" method="POST">
    @csrf
    @method('PUT')
    @include('collaborators.form')

</form>