<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
    <title>Seja um Voluntário</title>
</head>

<body>
    <div class="cadastro_voluntario">
        <div>
            <h1 id="titulo">Seja um voluntário</h1>

            <section class="conteudo">
                <div class="imagem">
                    <img src="imagens/imagem maos.png" title="Mãos" alt="Imagem de mãos">
                </div>

                <div class="texto">
                    <p>Seja um voluntário do nosso centro comunitário, qualquer ajuda é válida. Não é apenas quem é
                    “especialista” em alguma atividade que pode ser voluntário. Todos podem participar e contribuir. O que
                    conta é a motivação solidária, o desejo de ajudar, o prazer de se sentir útil.</p>
        
                   <p> – Você pode compartilhar apenas com as crianças os seus talentos e paixões, abrindo para elas um mundo
                    totalmente diferente.</p>
        
                    <p>– Você pode participar na renovação e nas obras de construção.</p>
        
                    <p>- Pode pintar nossas paredes ou colocar algumas pichações sobre eles, trazendo um pouco mais de cor na
                    vida cotidiana das crianças.</p>
        
                    <p>– Se você é fotógrafo ou operador, pode nos ajudar a criar meios de comunicação de base com boas fotos e
                    vídeos da nossa escola e alunos.</p>
        
                    <p>– Se você é um especialista em qualquer área do desenvolvimento infantil e educação: médico, dançarino,
                    músico, professor de línguas estrangeiras ou psicólogo venha colaborar conosco.</p>
                    <p>– Se você tem suas próprias ideias teremos gosto em discuti-las.
                    </p>
                </div>   
            </section>
            
        </div>
        <br>
        <form class="formulario" method = "post" action="voluntario_concluido.php"> <!--action usado para que após clicar no botão de enviar vá para a página de cadastro concluido voluntario-->
            <h2 id="subtitulo">Cadastro de Voluntário</h2>
            <br><br>
            <fieldset class="grupo">
                <div class="campo left">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                </div>
    
                <div class="campo right">
                    <label for="nascimento"><strong>Data de nascimento</strong></label>
                    <input type="date" name="nascimento" id="nascimento" required>
                </div>
    
                <div class="campo left">
                    <label for="cpf"><strong>CPF</strong></label>
                    <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" required maxlength="11">
                </div>
    
                <div class="campo right">
                    <label class="campo"><strong>RG</strong> </label>
                    <input type="text" name="rg" id="rg" placeholder="xx.xxx.xxx-x" required maxlength="10">
                </div>
    
                <div class="campo left">
                    <label for="tel_number"><strong>Telefone de Contato</strong></label>
                    <input type="tel" name="tel_number" id="tel_number" placeholder="(00) 0000-0000" maxlength="14">
                </div>
    
                <div class="campo right">
                    <label for="celular"><strong>Celular de contato</strong></label>
                    <input type="tel" name="celular" id="celular" placeholder="(00) 00000-0000"required maxlength="15">
                </div>
    
                <div class="campo left">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" name="email" id="email" placeholder="name@name.com" required>
                </div>
                <div class="campo right"><br><br><br><br></div>
                <div class="campo inline left">
                    <label>
                        <input type="radio" name="voluntario" value="Geral" checked>Voluntário Geral
                    </label>
                    <label>
                        <input type="radio" name="voluntario" value="Especifico">Voluntário Específico
                    </label>
                </div>
                <div class="campo right"><br><br><br><br></div>
                <div class="campo left">
                    <input type="text" name="especialidade" id="especialidade" placeholder="Especialidade*" maxlength="20">
                </div>
            </fieldset>
            
            <button  class="botao" type="submit" >Enviar</button>
            
        </form>
        
    </div>
</body>

</html>