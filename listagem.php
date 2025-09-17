<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="container">
        <h1>Listagem de Produtos</h1>
        <table id="example" class="display">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome do Produto</th>
                <th>Categoria</th>
                <th>QTDE em Estoque</th>
                <th>Valor</th>
                <th>Validade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>           
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nome do Produto</th>
                <th>Categoria</th>
                <th>QTDE em Estoque</th>
                <th>Valor</th>
                <th>Validade</th>
            </tr>
        </tfoot>
    </table>         
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>