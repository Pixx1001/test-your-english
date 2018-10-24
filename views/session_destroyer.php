<?php 
    /***
        Essa página serve apenas para encerrar
        uma sessão do painel de Admin,
        Em breve, será embutida em um script PHP
        para economizar arquivos criados...
    ***/
    session_start();
    session_destroy();
    header('Location: ../admin.php')
?>