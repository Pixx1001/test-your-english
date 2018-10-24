<?php
    require_once('views/header.php');
    require_once('views/nav.php'); ?>
<div class="container">
    <div class="wrapper">
        <div class="colarticle">
            <article>  
                <h1 class="well">Bem Vindo!</h1>

                <p class="well">
                    Teste suas habilidades nesse website com questões que vão testar
                    seu conhecimento em inglês com questões de audio, gramática, leitura e vocabulário.<br/>
                    Antes de começarmos,responda a este pequeno formulário para poder começar o Teste:
                </p>
                <div id="checaAluno" class="cadastro center">
                    <h3>Antes de prosseguir para o questionário:</h3>
                    <p>Você é:</p>
                    <button id="alunoif" class="btn botaop"><span class="glyphicon glyphicon-ok"></span> Aluno do Instituto Federal</button><br><br>
                    <button id="naoaluno" class="btn botaop"><span class="glyphicon glyphicon-remove"></span> Aluno de outra escola/faculdade</button><br><br>
                    <p class="alert alert-info ">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        Caso você não esteja estudando nesse ano, poderá colocar<br> o nome da sua última
                        escola/faculdade em que você estudou.
                    </p>

                </div>
                <br>
                <form id="cadastro" name="cadastro" class="cadastro oculta" method="post" action="login.php" onsubmit="return login(this);">
                    <p>Informacões básicas:</p>
                    <label class="simple">Nome:</label> <input placeholder="Digite o Nome Completo" type="text" name="nome" required> 
                    <label class="simple" id="lpront">Prontuário:</label> <input placeholder="Digite o Prontuário" type="text" name="pront" id="pront">
                    <div class="grouped">
                        <label class="simple">Câmpus/Escola e Estado :</label><br>
                        <input placeholder="Escola ou câmpus" type="text" name="campus" id="campus">          
                        <select name="estado" id="estado">  
                            <option value="sp">SP</option>
                            <option value="rj">RJ</option>
                            <option value="mg">MG</option>
                            <option value="pa">PA</option>
                            <option value="sc">SC</option>
                            <option value="es">ES</option>
                            <option value="outro">N/A</option>
                        </select>
                    </div>
                    <label class="simple">Data de Nascimento:</label> <input type="date" name="nasc">
                    <label class="simple" id="lcurso">Curso: </label>
                    <select name="curso" id="curso">
                        <option>Informática</option>
                        <option>Administração</option>
                        <option>Meio Ambiente</option>
                        <option>Edificações</option>
                        <option>Outro curso...</option>
                    </select>
                    <label class="simple" id="lmodulo">Módulo: </label>
                    <select name="modulo" id="modulo">
                        <option>1° Módulo</option>
                        <option>2° Módulo</option>
                        <option>3° Módulo</option>
                        <option>4° Módulo</option>
                    </select>
                    <label class="simple">Tipo de teste: </label>
                    <select name="tipo">
                        <option>Leitura</option>
                    </select>
                    <label class="simple">Dificuldade: </label>
                    <select name="dificuldade">
                        <option value="1" checked>Casual - Ilimitado - 10 perguntas</option>
                        <option value="2">Avançado - Ilim. - 25 perguntas</option>
                    </select>
                    <input type="hidden" value="" id="tipoaluno" name="tipoaluno">
                    <input type="submit" value="Começar o teste >>"/>
                </form>
                <p class="termos alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    Esse site foi criado apenas para fins acadêmicos e não visa nenhum fim lucrativo. 
                    Erros e bugs são esperados. 
                </p>
            </article>

            <div class="push"></div>
        </div>

    <!--Quadro de notícias-->
<?php
    $sql = 'SELECT * FROM noticias ORDER BY id DESC';
    $query = $pdo->query($sql);
    $news = $query->fetchAll(); // Linhas da consulta
?>

<div class="avisos ">
    <p class="newshead" style="font-size:22px;"><span class="glyphicon glyphicon-warning-sign aviso"></span> Notícias:
        <span id="showOld" class="glyphicon glyphicon-chevron-down" style="font-size:16px; margin-top:15px; float:right;" onclick="old();"></span>
    </p>

    <hr style="border: none; border-bottom:1px solid #BB1B26;"/>
    <br/>

    <h4><?=$news[0]['titulo'] ?> <span style="float:right;"><?=$news[0]['data'] ?></span> </h4>

    <div class="media">
        <div class="pull-left">
            <img class="newsImage media-object" width="100" height="100" src="img/amflag_gray.png"/>
        </div>
        <div class="media-body">
            <?php echo $news[0]['conteudo'] ?>
        </div>
        <br>
        <br/>
        <br/>
</div>

    <!--O Conteúdo da div oldNews é oculto e só é exibido ao click do botão 'V' -->

    <div id ="oldNews" class="oldNews">
    <?php 
        /***
            Gambiarra altamente projetada para funcionar.
            Não tente entender como funciona, apenas aceite.
        ***/
        for($i=1; $i < count($news); $i++){
            echo "<br/><h4>".$news[$i]['titulo']." <span style=\"float:right;\">".$news[$i]['data']."</span> </h4><br/>";

            echo
            "

            <div class=\"media\">
                <div class=\"pull-left\">
                    <img class=\"newsImage media-object\" width=\"100\" height=\"100\" src=\"".$news[$i]['imagem']."\"/>
                </div>
                <div class\"media-body\">
                    ".$news[$i]['conteudo']."
                </div>
                <br/>
            </div>

            ";
        }
    ?>
    </div><!--oldNews -->
</div> <!-- avisos-->

    <!-- Quadro de notícias-->         


    </div> <!-- .wrapper -->

</div> <!-- #page -->

<?php require_once('views/footer.php'); ?>