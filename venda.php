<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php include "menu.php"; ?>    
    <div class="container">
        <h1>Realize a Venda</h1>
        <form class="row g-2" action="scripts/venda.php" method="post">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Selecione o Produto</label>
                <select name="produto" class="form-control" required>
                    <option value="">-</option>
                     <?php
                        include "scripts/config.php"; 
                        $sql = "SELECT id,nome_produto FROM produto";
                        $query = $mysqli->query($sql);
                        while($dados = $query->fetch_array()){
                    ?>
                    <option value="<?php echo $dados[0];?>"><?php echo $dados[1];?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Informe a Quantidade</label>
                <input type="text" class="form-control" placeholder="Estoque" name="qtde_estoque" required>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Vender Produto</button>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>