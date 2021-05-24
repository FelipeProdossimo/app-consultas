<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Consultas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    
    </style>
</head>

<body>
    <div class="container text-center text-align mt-5">
        <form style="max-width:500px; margin:auto;">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
</svg>
                    <h3>Faça seu login:</h3>  
                <div class="mb-3 row">
                    <label for="loginEmail" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="email" value="email@exemplo.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Senha:</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
            </div>
            <div class="checkbox text-center">
                <label>
                    <input type="checkbox" value="relembrar"> Relembrar-me OU
                    <a href="registro.php">Registrar-se</a> agora!
                </label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Entrar</button>
            </div>
        </form>
    </div>
    <footer class="fixed-bottom text-center">  
        &copy; Todos os direitos reservados
    </footer>
    </main>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/jquery.min.js"></script>

</body>
</html>