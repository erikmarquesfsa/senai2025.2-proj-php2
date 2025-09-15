<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1>Cadastre o produto</h1>
    <div class="container">
        <form class="row g-2" action="scripts/salvar.php" method="post">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" name="n_produto" placeholder="Nome do Produto" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Categoria</label>
                <select name="categoria" class="form-select" required>
                    <option selected>Selecione</option>
                    <option value="Alimentação">Alimentação</option>
                    <option value="Frios">Frios</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Hortifrut">Hortifrut</option>
                </select>
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">QTDE Estoque</label>
                <input type="text" class="form-control" placeholder="Estoque" name="qtde_estoque" required>
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">Valor</label>
                <input type="text" class="form-control"  placeholder="Informe o valor" name="valor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Validade</label>
                <input type="date" class="form-control" name="validade">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar Produto</button>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>