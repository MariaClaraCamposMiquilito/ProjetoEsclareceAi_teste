<!--
    *** Integrantes ***
    Maria Clara Campos Miquelito
    Kauan Ferreira Rezende
    2° informática
-->

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="http://localhost/ProjetoEsclareceAi_teste/styles/principal.css">
    <link rel="icon" type="image/png" href="http://localhost/ProjetoEsclareceAi_teste/assets/icone.png"/>
</head>

<body>
    <header class = "cabecalho">

        <div class ="logo">
            <img src="http://localhost/ProjetoEsclareceAi_teste/assets/logoFundoRemovido.png"width="300" height="300">
        </div>

        <div class="centro">
            <div class = "cabecalho_menu">
                    <a class="cabecalho_menu_links" href="http://localhost/ProjetoEsclareceAi_teste/principal.html"> Home</a>
                    <a class="cabecalho_menu_links" href="http://localhost/ProjetoEsclareceAi_teste/SobreNos.html"> Sobre Nós</a>
                    <a class="botao" href="http://localhost/ProjetoEsclareceAi_teste/login.html"> Login </a> 
            </div>
        </div>
    </header>

    <div class="menu_lateral"> 
        <input class = "checkbox" type ="checkbox" id="check">
            <label class ="check" for = "check">
               <img class ="imagem_menu_lateral" src="http://localhost/ProjetoEsclareceAi_teste/assets/risco_menu.png" width="40" height="40">
            </label>
        <nav class ="navegacao_menu_lateral">
            <ul class ="menu_lateral_conteudo">
              <li><a class="menu_lateral_links" href="">Inglês</a></li>
              <li><a class="menu_lateral_links" href="">Química</a></li>
              <li><a class="menu_lateral_links" href="">Matemática</a></li>
              <li><a class="menu_lateral_links" href="">Biologia</a></li>
              <li><a class="menu_lateral_links" href="">Física</a></li>
              <li><a class="menu_lateral_links" href="">Português</a></li>
              <li><a class="menu_lateral_links" href="">Redação</a></li>
              <li><a class="menu_lateral_links" href="">Geografia</a></li>
              <li><a class="menu_lateral_links" href="">História</a></li>
              <li><a class="menu_lateral_links" href="">Filosofia</a></li>
              <li><a class="menu_lateral_links" href="">Sociologia</a></li>
              <li><a class="menu_lateral_links" href="">Técnico em Informática</a></li>
              <li><a class="menu_lateral_links" href="">Técnico em Eletrotécnica</a></li>
              <li><a class="menu_lateral_links" href="">Técnico em Mecânica</a></li>
              <li><a class="menu_lateral_links" href="">Técnico em Eletromecânica</a></li>
            </ul>
        </nav>
    </div>
 
    <main>
      ​<  <div class ="campo_perguntas">

            <p class ="titulo">Perguntas mais recentes</p>

            <div class="conteudo_pergunta">
                <div class="perguntas_informacoes">
                    <img src="http://localhost/ProjetoEsclareceAi_teste/assets/usuario_sem_foto.png"width="120" height="70">
                    <p class="informacoes">Matemática. Há 3 horas</p>
                    <p class="informacoes">ID 000003</p>
                </div>
                <p class="texto_pergunta">Os quartis são valores que dividem o conjunto de dados ordenados (rol) em 4 partes iguais (em cada uma das quatro partes tem-se 25% dos dados). Qual destes quartis é o valor situado na série de dados à direita da mediana de tal modo que 75% das observações são menores que ele e 25% são maiores?</p>
            </div> <br><br>

            <div class="conteudo_pergunta">
                <div class="perguntas_informacoes">
                    <img src="http://localhost/ProjetoEsclareceAi_teste/assets/usuario_sem_foto.png"width="120" height="70">
                    <p class="informacoes">Geografia. Há 1 dia</p>
                    <p class="informacoes">ID 000002</p>
                </div>
                <p class="texto_pergunta">Como podemos relacionar formas do relevo e ocupação humana? Quais as formas de relevo em que há maior ocupação da sociedade? Quais são os problemas mais comuns das áreas urbanas?/p>
            </div><br><br>

            <div class="conteudo_pergunta">
                <div class="perguntas_informacoes">
                    <img src="http://localhost/ProjetoEsclareceAi_teste/assets/usuario_sem_foto.png"width="120" height="70">
                    <p class="informacoes">Português. Há 3 dias</p>
                    <p class="informacoes">ID 000001</p>
                </div>
                <p class="texto_pergunta">As funções da linguagem estão diretamente ligadas aos elementos essenciais do processo de comunicação, e uma delas é definida como uma conversa “de elevador”, “de fila do banco”, aquela rápida e que fazemos por educação no dia a dia. É a função:​</p>
            </div>
        </div>
    </main>

    <footer class ="rodape">
        <p>Desenvolvido por MK-Tech</p>
    </footer>
</body>

</html>