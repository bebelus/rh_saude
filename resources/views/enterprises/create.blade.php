<h1>Nova Empresa</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('enterprises.store') }}" method="POST">
    @csrf
    @include('enterprises.form')
</form>