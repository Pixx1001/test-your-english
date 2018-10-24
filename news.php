<?php
    require_once('views/header.php');
    require_once('views/nav.php');

    $sql = 'SELECT * FROM noticias';
    $query = $pdo->query($sql);
    $news = $query->fetchAll(); // Linhas da consulta

    pr($news);
?>


<div class="avisos">
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
            <?=$news[0]['conteudo'] ?>
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


<?php 
    require_once('views/footer.php');
?>