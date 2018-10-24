<?php
    /***
        Configurações e caminhos do site
        Nem todas as páginas estão configuradas.
        É preciso  trocar MySQLi por PDO nas páginas:
            -login.php
     ***/
    
    //Host do site
    $host = $_SERVER['HTTP_HOST'];
    //Banco de dados padrão
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');   
    define('DB_NAME','tye_ifsp');
    $connect=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    
    //var_dump($_SERVER);
    
    //Funções padrão do WebSite
    
    //Teste de conexão ao BD (MySQLI)(obsoleto)
    function testeBD($connect){
        if(mysqli_connect_errno($connect)){
        	    echo 'Falha ao conectar ao BD';
        }
        else{
            echo 'Conectado ao BD <br>';
        }
    }

    //Método PDO
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );     

   

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=tye_ifsp;', 'root','',$options);
        $status =  'Conexão com o BD '.DB_NAME.' Estabelecida!';
    }
    catch (PDOException $e){
        echo 'HOJE NÃO!<hr>'.$e->getMessage();
    }


?>