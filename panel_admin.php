<?php 
    /* O PAINEL REAL
        Se confirmado o login, os itens para administrar o site 
        aparecerão nesta página  */

    error_reporting(E_ALL & ~E_NOTICE);
    require_once('views/header.php');
    require_once('views/nav.php');
?>

<div class="card center">
<?php 
    session_start();
    if($_SESSION['login'] == '200'){
        require_once 'views/admin_panel.php'; 
    }
    else{
        include_once('views/access_denied.php');
        echo '<h1>Você não fez login</h1>'
        .'<p>Verifique seu nome e senha e tente novamente</p>';
    }

   // var_dump(get_defined_vars());

?>
</div>

<?php require_once('views/footer.php'); ?>