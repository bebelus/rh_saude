<head>
    <style type="text/css">
table { border: 1px solid black; border-collapse: collapse }
th { background-color: gainsboro; }
td { border: 0.5px solid gray; }
tfoot { background-color: whitesmoke; }
    </style></head>

<div >
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <h1>Lista de Empresas terceirizadas - <a href="/enterprises/create" class="btn btn-primary">Incluir</a></h1>
        </div>
        </div>
    </div>
<table id="someTable">
    <thead>    
        <tr>    
            <th scope="col">Razão Social</th>
            <th scope="col">Nome Fantasia</th>    
            <th scope="col">CNPJ</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>    
    <tbody>    
        @foreach ($enterprises as $enterprise)
            <tr>    
                <td>{{ $enterprise->razao_social }}</td>
                <td> {{ $enterprise->fantasia  }}</td>
                <td>{{ $enterprise->cnpj }}</td>
                <td>{{ $enterprise->phone }}</td>
                <td>{{ $enterprise->email }}</td>
                <td>    
                    <a href="enterprises/{{ $enterprise->id }}" class="btn btn-primary">Detalhes</a>    
                    <a href="" class="btn btn-danger">Movimentar</a>    
                </td>    
            </tr>    
        @endforeach
    </tbody>    
</table>   
{{ $enterprises->links() }}
    </div>
<script>/*
addPagerToTables('#someTable', 20);

function addPagerToTables(tables, rowsPerPage = 10) {

    tables = 
        typeof tables == "string"
      ? document.querySelectorAll(tables)
      : tables;

    for (let table of tables) 
        addPagerToTable(table, rowsPerPage);

}

function addPagerToTable(table, rowsPerPage = 10) {

    let tBodyRows = getBodyRows(table);
    let numPages = Math.ceil(tBodyRows.length/rowsPerPage);

    let colCount = 
      [].slice.call(
          table.querySelector('tr').cells
      )
      .reduce((a,b) => a + parseInt(b.colSpan), 0);

    table
    .createTFoot()
    .insertRow()
    .innerHTML = `<td colspan=${colCount}><div class="nav"></div></td>`;

    if(numPages == 1)
        return;

    for(i = 0;i < numPages;i++) {

        let pageNum = i + 1;

        table.querySelector('.nav')
        .insertAdjacentHTML(
            'beforeend',
            `<a href="#" rel="${i}">${pageNum}</a> `        
        );

    }

    changeToPage(table, 1, rowsPerPage);

    for (let navA of table.querySelectorAll('.nav a'))
        navA.addEventListener(
            'click', 
            e => changeToPage(
                table, 
                parseInt(e.target.innerHTML), 
                rowsPerPage
            )
        );

}

function changeToPage(table, page, rowsPerPage) {

    let startItem = (page - 1) * rowsPerPage;
    let endItem = startItem + rowsPerPage;
    let navAs = table.querySelectorAll('.nav a');
    let tBodyRows = getBodyRows(table);

    for (let nix = 0; nix < navAs.length; nix++) {

        if (nix == page - 1)
            navAs[nix].classList.add('active');
        else 
            navAs[nix].classList.remove('active');

        for (let trix = 0; trix < tBodyRows.length; trix++) 
            tBodyRows[trix].style.display = 
                (trix >= startItem && trix < endItem)
                ? 'table-row'
                : 'none';  

    }

}

// tbody might still capture header rows if 
// if a thead was not created explicitly.
// This filters those rows out.
function getBodyRows(table) {
    let initial = table.querySelectorAll('tbody tr');
  return Array.from(initial)
    .filter(row => row.querySelectorAll('td').length > 0);
}
    </script>