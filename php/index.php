<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main class="container-fluid">
        <form action="validar.php" method="post">
            <div class="row">
                <div class="col">
                    <label class="form-label">usuario:</label> <input name="usuario" class="form-control">
                </div>
                <div class="col">
                   <label class="form-label">senha:</label> <input name="senha" type="password" class="form-control"><br>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-3">
                <button type="submit" class="btn btn-primary">entrar</button>
                <button type="reset" class="btn btn-secondary">limpar</button>
                </div>
            </div>
        </form>
        <footer>
            <p>todos os direitos reservados &copy; <?php echo date("Y");?></p>
        </footer>
    </main>
</body>
</html>