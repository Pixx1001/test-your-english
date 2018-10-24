<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
    require('../tye_config.php');
    $user = $_POST['admin_name'];
    $senha  = $_POST['admin_pass'];
    
    $sql = "SELECT * FROM usuarios WHERE nome = '$user' AND senha = '$senha'" ;
    $query= $pdo->query($sql);
    $linhas = $query->fetchAll();

    if(count($linhas) == 1){
        session_start();
        $_SESSION['login'] = '200';
        $_SESSION['user'] = $linhas['0']['nome'];
        header('Location: ../panel_admin.php');
        //echo '<h1>Bem vindo à selva</h1>';
    }
    else{
        echo 
        '
        <h1>Um momento, amigo!</h1>
        <br>
        <p>Verifique seu nome e senha e tente novamente...</p>
        ';
    }
    
    setcookie('User',$user);
?>
</body>
</html>
