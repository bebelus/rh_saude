
<div >
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <h1>Lista de colaboradores sem vínculo - <a href="/collaborators/create" class="btn btn-primary">Incluir</a></h1>
        </div>
        </div>
        <p><h2><a href="{{ route('bonds.index') }}" class="btn btn-primary">Lista de colaboradores com vínculo</a></h2></p>
    </div>
 
<table class="table">
    <thead>    
        <tr>    
            <th scope="col">Nome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Email</th>    
            <th scope="col">Ações</th>
        </tr>
    </thead>    
    <tbody>    
        @foreach ($collaborators as $collaborator)
            <tr>    
                <td>{{ $collaborator->name }}</td>
                <td>{{ $collaborator->birth->format('d/m/Y') }}</td>
                <td>{{ $collaborator->email }}</td>    
                <td>    
                    <a href="" class="btn btn-primary">Editar</a>    
                    <a href="" class="btn btn-danger">Movimentar</a>    
                </td>    
            </tr>    
        @endforeach
    </tbody>    
</table>    
{{ $collaborators->links() }}
    </div>

