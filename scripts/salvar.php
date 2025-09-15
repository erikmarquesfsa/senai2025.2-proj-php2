<html>
    <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
<?php

include "config.php";
include "functions.php";

$produto = $_POST['n_produto'];
$categoria = $_POST['categoria'];
$qtde_estoque = $_POST['qtde_estoque'];
$valor = $_POST['valor'];
$validade = $_POST['validade'];

if(verificarProduto($produto)==0){

$sql = "INSERT INTO produto values (null,'$produto','$categoria','$qtde_estoque','$valor','$validade')";
$query = $mysqli->query($sql);

    if($query){ ?>
        <script>
            Swal.fire({
            title: "Sucesso!",
            text: "Cadastro Adicionado",
            icon: "success"
            }).then(okay=>{
                if(okay){
                    window.location.href = "../index.php";
                }
            });
        </script>
    <?php }else{ ?>
    <script>
        Swal.fire({
        title: "Ops!",
        text: "Houve um erro. Por favor, tente novamente",
        icon: "error"
        }).then(okay=>{
            if(okay){
                window.location.href = "../index.php";
            }
        });
    </script>
    <?php }


}else{ ?>

    <script>
        Swal.fire({
        title: "Ops!",
        text: "Esse produto já foi cadastrado.",
        icon: "error"
        }).then(okay=>{
            if(okay){
                window.location.href = "../index.php";
            }
        });
    </script>

<?php } ?>
    </body>
</html>