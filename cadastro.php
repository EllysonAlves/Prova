<?php
require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="row mt-5" >
        <div class="col-4" >

        </div> <!-- fim col-4 -->
        <div class="col-4 shadow" >
        <form action="cadastrar.php" method="post" class="ms-5 me-5" >
            <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label">Descrição do serviço</label>
                <input name="desc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor da nota</label>
                <input name="valor" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputnome" class="form-label">Nome do Cliente</label>
                <input name="cliente" type="text" class="form-control" id="exampleInputnome">
            </div>
            <div class="mb-3">
                <label for="exampleInputdesconto" class="form-label">Valor do Desconto</label>
                <input name="desconto"  type="text" class="form-control" id="exampleInputdesconto">
            </div>
            <div class="mb-3">
                <label for="exampleInputliquido" class="form-label">Valor Liquido</label>
                <input name="liquido"  type="text" class="form-control" id="exampleInputliquido">
            </div>
            
            <a href="index.php" class="btn btn-secondary mb-5" >Voltar</a>
            <button type="submit" class="btn btn-primary mb-5">Cadastrar</button>
        </form>
        </div> <!-- fim col-4 -->
        <div class="col-4" >
            
        </div> <!-- fim col-4 -->
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>