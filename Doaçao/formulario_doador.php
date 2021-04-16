<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="formulario_doador.css" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Home/css/style.css" media="screen">
    <title>Doações</title>
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : ' 6Lesd6caAAAAAOMb_uTxoAGkr7TS8bmKGJ31tc8S '
        });
      };
    </script>
</head>

<body>
    <header>
        <div class="center">
            <div class="vó-fundo">
            </div>
            <!--vó-fundo-->
        </div>
        <!--center-->
    </header>
    <nav>
        <div class="center">
            <div class="logo">
                <a href="../Home/index.php">
                    <img src="../Home/imagem/Vó-logo.jpeg">
                </a>
            </div>
            <!--logo-->
            <ul class="menu">
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Sobre/sobre.php">Sobre</a></li>
                    <li><a href="../Projetos/projetos.php">Projetos</a></li>
                    <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
                    <li><a href="../Contato/Contato2.php">Contato</a></li>
                    <li><a class="btn-menu" href="../Doaçao/formulario_doador.php">Doações</a></li>
            </ul>
            <!--menu-->
        </div>
        <!--center-->
    </nav>
    <section class="corpo">
        <div>
            <h1 id="titulo">Doações</h1>
        </div>
        <div class="conteudo">
            <div class="imagem">
                <img src="doacao.png" title="imagemInicial" alt="doacao" />
            </div>
            <div class="texto">
                <p> Com as doações, o centro tenta proporcionar um elevado nível de
                    educação e oportunidades para o desenvolvimento e criatividade das crianças.
                    De modo a assegurar o dinheiro que nos é fornecido, preparamos um relatório
                    detalhado sobre a utilização de fundos para todos os nossos doadores.
                    Pode também contribuir diretamente, ajudando a pagar as contas
                    de consumo (água, luz e aluguel).
                </p>
            </div>
            <div>

            </div>

        </div>
        <br>
        <form class="formulario" method="post" action="cadastrado_doador.php">
            <br>
            <div>
                <h2 id="subtitulo">QUERO SER UM DOADOR</h2>
            </div>
            <fieldset class="grupo">
                <div class="campo left">
                    <label for="nome"><strong>Nome:</strong></label>
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                </div>
                <div class="campo rigth">
                    <label for="cpf"><strong>CPF:</strong></label>
                    <input type="text" name="cpf" id="cpf" placeholder="CPF xxx.xxx.xxx-xx" required>
                </div>

                <div class="campo left">
                    <label for="tel_number"><strong>Tel:</strong></label>
                    <input type="tel" name="tel_number" id="tel_number" placeholder="(00) 0000-0000">
                </div>
                <div class="campo rigth">
                    <label for="celular"><strong>Cel:</strong></label>
                    <input type="tel" name="celular" id="celular" placeholder="(00) 0000-000" required>
                </div>

                <div class="campo left">
                    <label for="endereco"><strong>End:</strong></label>
                    <input type="text" name="endereco" id="cendereco" placeholder="endereço com número" required>
                </div>

                <div class="campo right"><br><br><br><br></div>
                <div class="campo inline left">
                    <label>
                        <input type="radio" name="anonimo" value="Recorrente">Quero ser um doador recorrente
                        <!--ao escolher vai mostrar valor Recorrente-->
                    </label>
                    <label>
                        <input type="radio" name="anonimo" value="Anonimo">Quero ser um doador anonimo
                        <!--ao escolher vai mostrar valor Anonimo-->
                    </label>
                </div>
            </fieldset>
            <div id="html_element"></div>
            <br>
          </form>
          <div class="campo center"><br><br><br><br></div> 
          <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
              async defer>
          </script>
            <button class="botao" type="submit">Enviar</button>
        </form>
        <section class="DadosBanco">
            <div class="conteudoDois">
                <div class="imagemDois">
                    <img src="qr_code.png" title="imagemDois" alt="qr_code" />
                </div>
                <div class="textoDois">
                    <fieldset>
                        <br><br>
                        <p><b>Dados Bancários para doações:</b></p>
                        Banco: xxxx
                        <br>
                        Agência: xxxx
                        <br>
                        Conta: xxxxxx-x
                        <br>
                        Pix: xxxxxxxxxxx
                        <br><br>
                    </fieldset>
                </div>
            </div>
        </section>

        <div>
            <p>
                <b> Caso transifra dinheiro para a nossa conta,
                    pedimos que nos envie o informções sobre a transação via e-mail ou ligue para
                    o número de telefone (12) 3966-2823.</b>
            </p>
            <br>
            <p>
                <b>Para fazer doações pessoalmente:<br>
                    R. Dom João VI, 151 - Jardim Colonial, São José dos Campos - SP: 12232-100</b>
            </p>

        </div>

        <div class="footer">
            <div class="footer-inline">
                <div class="footer-left">
                    <p>Telefone:(12)3966-2833</p>
                    <p>Email:administracao@aamu.org.br</p>
                    <p>Horário de Segunda a Sexta, das 07:00h às 17:00hs</p>
                </div>

                <div class="footer-right">
                    <span>Você pode nos ajudar compartilhando nossa causa</span>
                    <span>
                        <span>
                            <a target="_blank" href="javascript:void(0)" onclick="share()">
                                <img class="vó-icons-share" src="../Home/imagem/compartilhar.png" />
                            </a>

                            <img class="vó-icons-share vó-icons-share-insta" src="../Home/imagem/logo-instagram.png" />

                            <a target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                                <img class="vó-icons-share vó-icons-share-face" src="../Home/imagem/logo-facebook.png">
                            </a>

                            <a target="_blank"
                                href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
                                <img class="vó-icons-share vó-icons-share-whats"
                                    src="../Home/imagem/logo-whatsapp.png" />
                            </a>
                        </span>
                    </span>
                </div>
            </div>
            <div class="footer-center">
                <p>2021 <a href="">Vó Maria Félix</a> - Todos os direitos reservados.</p>
            </div>

            <script>
                function share() {
                    if (navigator.share !== undefined) {
                        navigator.share({
                            title: 'Maria Vó Félix',
                            text: 'Um texto de resumo',
                            url: 'https://www.facebook.com/fatecjessenvidal/',
                        })
                            .then(() => console.log('Successful share'))
                            .catch((error) => console.log('Error sharing', error));
                    }
                }
            </script>
        </div>
    </section>
</body>

</html>