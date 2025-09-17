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
                <th style="text-align: center;">Id</th>
                <th style="text-align: center;">Nome do Produto</th>
                <th style="text-align: center;">Categoria</th>
                <th style="text-align: center;">QTDE em Estoque</th>
                <th style="text-align: center;">Valor</th>
                <th style="text-align: center;">Validade</th>
                <th style="text-align: center;">#</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "scripts/config.php"; 
                $sql = "SELECT * FROM produto";
                $query = $mysqli->query($sql);
                while($dados = $query->fetch_array()){
            ?>
            <tr style="text-align: center;">
                <td style="text-align: center;"><?php echo $dados[0];?></td>
                <td style="text-align: center;"><?php echo $dados[1];?></td>
                <td style="text-align: center;"><?php echo $dados[2];?></td>
                <td style="text-align: center;"><?php echo $dados[3];?></td>
                <td style="text-align: center;"><?php echo $dados[4];?></td>
                <td style="text-align: center;">
                    <?php echo date('d/m/y', strtotime($dados[5]));?>
                </td>
                <td style="text-align: center;">
                    <a href="editar.php?id=<?php echo $dados[0];?>" class="btn btn-primary">Editar</a>
                </td>
            </tr>           
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th style="text-align: center;">Id</th>
                <th style="text-align: center;">Nome do Produto</th>
                <th style="text-align: center;">Categoria</th>
                <th style="text-align: center;">QTDE em Estoque</th>
                <th style="text-align: center;">Valor</th>
                <th style="text-align: center;">Validade</th>
                <th style="text-align: center;">#</th>
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