<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login </title>
        <link rel="icon" href="http://localhost/ProjetoEsclareceAi_teste/assets/logoSemFundo.png"/>
        <link rel="stylesheet" href="http://localhost/ProjetoEsclareceAi_teste/styles/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body> 
        <main class = "apresentacao">

            <div class = "campo1">
                <div class = "campo_imagem">
                    <img src="http://localhost/ProjetoEsclareceAi_teste/assets/logoCompletaSemFundo.png" width="200" height="200">        
                </div>

                <div class = "campo_texto">
                    <p class = "slogan"> O Lugar Perfeito Para Estudantes Esclarecerem Suas Dúvidas</p>
                </div>
            </div>

            <div class = "campo2">

                <div class = "campo_titulo">
                    <p class = "titulo_login">Login</p>
                    <p class = "subtitulo_login">Preencha os campos com seus dados de acesso</p>
                </div>

                <forms class = "campo_login">
                    <div class = "campo_login_icone">
                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>
                        <input class = "campo_login_input" type="text" placeholder="E-mail">
                    </div>

                    <div class = "campo_login_icone">
                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input class = "campo_login_input" type="password" placeholder="Senha">
                    </div>

                    <a class = "esqueceu_senha" href="#">Esqueci minha senha</a>
                    
                    <div class = "campo_login_botoes">
                        <button class ="botao" href="http://localhost/ProjetoEsclareceAi_teste/View/principal.php">Acessar</button>
                        
                        <div class = "botao_login_google">
                            <img src="http://localhost/ProjetoEsclareceAi_teste/assets/icone_google.png" width="25" height="20">        
                            <a class = "login_google" href ="#">Fazer login com o Google</a>
                        </div>
                        
                        <a class="registro" href="http://localhost/ProjetoEsclareceAi_teste/View/cadastro.php">Criar uma conta</a>
                    </div>
                    
                </forms>

            </div>
        </main>

    </body>

</html>