<?php 
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    if($_SESSION['login'] == '200'){
        header('Location: panel_admin.php');
    }
    require_once('views/header.php');
    require_once('views/nav.php');
?>
    <main>
        <form method="post" action="views/check_user.php">
        <div class="card center">
        <h1>Área de Administração</h1>
        <p>  Área restrita apenas para administradores e moderadores.
            Caso essa página não seja a que você esta procurando, clique em início.
        </p>
            <label>
            <span class="glyphicon glyphicon-user"></span> Usuário:
                <input type="text" name="admin_name" id="admin_name">
            </label><br>
            <label>
            <span class="glyphicon glyphicon-lock"></span> Senha: 
                <input type="password" name="admin_pass" id="admin_pass">
            </label>
            <br><br>
            <input id="login" type="submit" value="Acessar">

            <div id="response">...</div>

            </div>
        </form>
    <main>

<?php require_once('views/footer.php'); ?>