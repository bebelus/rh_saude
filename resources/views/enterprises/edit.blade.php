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
<form action="{{ route('enterprises.update', $enterprise) }}" method="POST">
    @csrf
    @method('PUT')
    @include('enterprises.form') 
</form>