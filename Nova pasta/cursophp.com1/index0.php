<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínica de Estética</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
  <div class="contener">

    <div class="corpo-form">
      <h1>Login</h1>
        <form method="POST" action="App/model/login.php">
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" name="usuario" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
              </p>
            </div>
            
            <div class="field">
              <p class="control has-icons-left">
                <input class="input" name="senha" type="password" placeholder="Senha">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>

            <div class="field">
              <p class="control">
                <button id ="btn" class="button is-success">
                  Entrar
                </button>
              </p>
            </div>
        </form>
    </div>
  </div>
</body>

</html>