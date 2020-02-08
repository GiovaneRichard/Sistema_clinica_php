<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínica de Estética</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h2 class="title has-text-grey">LOGAR</h2>
                    
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <div class="box">
                        <form action="\\login.php" method="POST">
                            <div class="field">
                                <div class="control">
            
                                     <p class="control has-icons-left">
                                    <p class="control has-icons-left has-icons-right">
                                       <input name="usuario" name="text" class="input is-large" placeholder="Email" autofocus="">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                        </span>

                                         <span class="icon is-small is-right">
                                          <i class="fas fa-check"></i>
                                        </span>
                                      </p>
                                    </p>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                     <p class="control has-icons-left">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                    <span class="icon is-small is-left">
                                      <i class="fas fa-lock"></i>
                                    </span>
                                  </p>

                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>