<!DOCTYPE html>
<html>
<head>
<title>Maria Vó Félix</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Estilo customizado -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

    <div id="container"><!-- Início container -->

        <header>
            <div class="center">
                <div class="vó-fundo">
                    <h2>VÓ MARIA FÉLIX - FUNDO</h2>
                </div><!--vó-fundo-->
            </div><!--center-->
        </header>

        <nav>
            <div class="center">
                <div class="logo">
                    <img src="imagem/Vó-logo.jpeg">
                </div><!--logo-->

                <ul class="menu">
                    <li><a class="btn-menu" href="..//Home/index.php">Home</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
                    <li><a href="contato">Contato</a></li>
                    <li><a href="../Doaçao/formulario_doador.php">Doações</a></li>
                </ul><!--menu-->

            </div><!--center-->
        </nav>

        <section class="main">
            <div class="center">
                <div class="main_cta">
                    <h2>Vó Maria Félix</h2> 
                    <p>Centro comunitário de convivência infantil</p>
                </div><!--main-cta-->
            </div><!--center-->
        </section><!--main--> 


        <section class="vó">
            <div class="center">
                <div class="vó-content">
                    <p>O Centro comunitário "VÓ MARIA FÉLIX" recebe crianças desde os 0 até aos 5 anos de idade.</p><br />
                    <p>Cerca de quarenta alunos fizeram parte do ano pioneiro. Ao longo do tempo este número foi aumentando significativamente, sendo que hoje a escola conta com cerca de duzentos e cinquenta alunos. No entanto, temos a ânsia de crescer ainda mais</p><br />
                    <p>Os nossos principais fins são: contribuir para o bem-estar, a valorização pessoal e a plena intregação social das crianças e dos jovens que, por razões de natureza diversa, passam por dificuldades no seu cotidiano.</p>
                </div>
                <img class="vó-img" src="imagem/img-vó-1.jpeg" />
            </div><!--center-->
        </section><!--vó-->

        <section class="você-pode">
            <div class="center">
                <div class="você-pode-content">
                    <p>
                        <span class="azul">Você</span>
                        <span>pode ser a</span>
                        <span class="laranja">mudança</span>
                        <span>na vida de uma</span>
                        <span class="laranja">criança</span>
                        <span class="azul">hoje!</span>
                    </p>
                </div>

                <div class="botões">
                <a href="../Doaçao/formulario_doador.html"><button><p>Seja um doador</p><img src="imagem/vó-doe.jpeg"></button></a>
                <a href="../Voluntario/cadastrovoluntario.html"><button><p>Seja um voluntário</p><img src="imagem/vó-voluntário.jpeg"></button></a>
                <a href="../Participantes/cadastro_participantes.html"><button><p>Inscreva seu filho</p><img src="imagem/vó-inscreva.jpeg"></button></a>
                </div>
            </div><!--center-->
        </section><!--você-pode-->
        <div class="footer-home">
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
                                    <img class="vó-icons-share"src="../Home/imagem/compartilhar.png" />
                                </a>
                    
                                <img class="vó-icons-share vó-icons-share-insta"src="../Home/imagem/logo-instagram.png" />
                    
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                                    <img class="vó-icons-share vó-icons-share-face" src="../Home/imagem/logo-facebook.png" >
                                </a>
                    
                                <a target="_blank" href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
                                    <img class="vó-icons-share vó-icons-share-whats" src="../Home/imagem/logo-whatsapp.png" />
                                </a>
                            </span>
                        </span>
                        
        
                    </div>
                </div>
                
        
                <div class="footer-center">
                    <p>2021 <a href="">Vó Maria Félix</a> - Todos os direitos reservados.</p>
                </div>
        
                <script>
                    function share(){
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
        </div>
        

    </div><!--/fim container -->
    
    <script>

        var el = document.querySelector('.menu-mobile-icon');

        el.addEventListener('click',()=>{
            //Queremos mostrar o menu.
            var menuItens = document.querySelector('.menu-itens');
            if(menuItens.classList.contains('show')){
                menuItens.classList.add('hide'); 
                menuItens.classList.remove('show'); 
            }else{
                menuItens.classList.add('show'); 
                menuItens.classList.remove('hide'); 
            }       
        });

    </script>

</body>
</html>