<?php

require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Fiscais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    

<div class="row mt-5">
    <div class="col-2">

    </div> <!-- fim col-2 -->

    <div class="col-8 p-5">
        <a class="btn btn-outline-primary mb-5" href="cadastro.php">Cadastrar nova nota fiscal</a>
        <table class="table shadow">
            <thead>
                <tr>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">Operações</th>

                </tr>
            </thead>
            <tbody>
                <?php
                  $query = $pdo->prepare("SELECT * FROM notasf");
                  $query -> execute();

                  while($notas = $query->fetch(PDO::FETCH_ASSOC)){

                  ?>

                <tr>
                    <th scope="row"><?php echo $notas['desc_servico'] ?></th>
                    <td><?php echo $notas['valor_liquido'] ?></td>
                    <td><a class="btn btn-secondary" href="editar.php?id=<?php echo $notas['id_nota'] ?>">Editar</a> <a class="btn btn-danger" href="excluir.php?id=<?php echo $notas['id_nota'] ?>">Exluir</a></td>
                </tr>

                <?php
                  }
                ?>

            </tbody>
        </table>
    </div> <!-- fim col-8 -->

    <div class="col-2">
        
    </div> <!-- fim col-2 -->
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>