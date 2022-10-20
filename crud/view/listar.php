<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>listar</title>
</head>

<body>
    <div class="container">

    <a href="formIncluir.php"><button class='btn'>Novo Aluno</button></a>

    <?php
    if( isset($gravou) ){

        if( !$gravou){

            echo ' <div class="alert alert-danger" role="alert">
                        Error ao tentar gravar o aluno!
                    </div>';
        }else{

            echo ' <div class="alert alert-success" role="alert">
            Aluno gravado com sucesso!
        </div>';
        }
    }
?>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Turno</th>
            <th>Inicio</th>
            <th>Ações</th>
        </thead>

        <?php
        foreach($alunos as $aluno){

            echo " <tr>
                        <td>{$aluno['id']}</td>
                        <td>{$aluno['nome']}</td>
                        <td>{$aluno['turno']}</td>
                        <td>{$aluno['inicio']}</td>

                    </tr>";
        }
        ?>

    </table>
</body>
</html>