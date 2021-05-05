<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Contato</title>
	<link rel="stylesheet" type="text/css" href="contato.css">
    <link rel="stylesheet" type="text/css" href="../Home/css/style.css" media="screen">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
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
                <li><a href="..//Home/index.php">Home</a></li>
                <li><a href="../Sobre/sobre.php">Sobre</a></li>
                <li><a href="../Projetos/projetos.php">Projetos</a></li>
                <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
                <li><a class="btn-menu" href="../Contato/Contato2.php">Contato</a></li>
                <li><a href="../Doaçao/formulario_doador.php">Doações</a></li>
            </ul>
            <!--menu-->
        </div>
        <!--center-->
    </nav>

    <h1 class="titulo">Contato</h1>
    
<div>
    <div class="info">
        <div class="paragrafos">
            <p class="tel">
                TELEFONE: (12) 3966-2823
            </p>

            <p class="email">
                E-MAIL: administracao@aamu.org.br
            </p>

            <p class="face">
                FACEBOOK: CECOI VÓ MARIA FÉLIX
            </p>

            <p class="horario">
                Horário de Segunda a Sexta das 07:00h ás 17:00h
            </p>
        </div>
    </div>

        <div class="google">
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14660.29387667944!2d-45.8999728!3d-23.27678!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd429ce060f725c70!2sCECOI%20V%C3%B3%20Maria%20F%C3%A9lix!5e0!3m2!1sen!2sbr!4v1617325066947!5m2!1sen!2sbr" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </p>
        </div>

</div>

    <h2 class="faleconosco2">FALE CONOSCO</h2>

<div class="faleconosco">

    <form name="formtest" method="post" action="../Contato/cadastrado_com_sucesso_contato.php">

        <p class="nome">
            <input type="texte" name="nome" placeholder="Nome:" required="required">
        </p>

        <p class="email1">
            <input type="email" name="email" placeholder="E-mail:" required="required">
        </p>

        <p class="assunto">
            <input type="number" name="celular" placeholder="Telefone:" required="required">
        </p>

        <p class="mensagem">
            <textarea type="textarea" maxlength="120" name="descriçao" placeholder="Descreva o motivo do contato:" required="required"></textarea>
        </p>

        <p class="enviar">
            <input type="submit" name="enviar" value="Enviar">
        </p>
    </form>

    <div class="footer-home">
        <div class="footer">
            <div class="footer-left">
                <p>Telefone : (12) 3966- 2833</p>
                <p>E-mail: administracao@<span>aamu.org.br</span></p>
                <p>Horário de Segunda a Sexta, das 07:00h às 17:00hs</p>
            </div>

            <div class="footer-right">
                <p>Você pode nos ajudar compartilhando nossa causa</p>
                    <span>
                        <a target="_blank" href="javascript:void(0)" onclick="share()">
                            <img class="vó-icons-share"src="../Home/imagem/compartilhar.png" />
                        </a>
                    
                         <a target="_blank" href="">

                            <img class="vó-icons-share vó-icons-share-insta"src="../Home/imagem/logo-instagram.png" />

                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                            <img class="vó-icons-share vó-icons-share-face" src="../Home/imagem/logo-facebook.png" >
                        </a>
                    
                        <a target="_blank" href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
                            <img class="vó-icons-share vó-icons-share-whats" src="../Home/imagem/logo-whatsapp.png" />
                        </a>
                    </span>
            </div>

            <div class="footer-center">
                <p>2021 
                <a href="">Vó Maria Félix</a> 
                - Todos os direitos reservados.</p>
            </div>

            </div>
        </div>
    </div>

</div><!--/fim container -->
</body>

</html>