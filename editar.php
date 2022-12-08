<?php
require_once('conexao.php');

$id = $_GET['id'];

$query = $pdo->prepare("SELECT * FROM notasf WHERE id_nota = $id");
$query -> execute();
$notas = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Nota Fiscal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="row mt-5" >
        <div class="col" >

        </div>
        <div class="col shadow" >
        <form action="edita.php" method="post" class="ms-5 me-5" >
            <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label">Discriminação do serviço</label>
                <input type="hidden" name="id" value="<?php echo $notas['id_nota'] ?>" >
                <input value="<?php echo $notas['desc_servico']  ?>" name="desc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor da nota</label>
                <input value="<?php echo $notas['valor_nota']  ?>" name="valor" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputnome" class="form-label">Nome do Cliente</label>
                <input value="<?php echo $notas['cliente']  ?>" name="cliente" type="text" class="form-control" id="exampleInputnome">
            </div>
            <div class="mb-3">
                <label for="exampleInputdesconto" class="form-label">Valor do Desconto</label>
                <input value="<?php echo $notas['desconto']  ?>" name="desconto"  type="text" class="form-control" id="exampleInputdesconto">
            </div>
            <div class="mb-3">
                <label for="exampleInputliquido" class="form-label">Valor Liquido</label>
                <input value="<?php echo $notas['valor_liquido']  ?>" name="liquido"  type="text" class="form-control" id="exampleInputliquido">
            </div>
            
            <a href="index.php" class="btn btn-primary mb-5" >Voltar</a>
            <button type="submit" class="btn btn-primary mb-5">Editar</button>
        </form>
        </div>
        <div class="col" >
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>