<?php
    require_once("views/header.php");
    include('views/nav.php');
   /***
    $pagina = (isset($_GET["p"]) ? $_GET["p"] : "home");
    require_once("views/".$pagina.".html");
    
    $nome = (isset($_GET["nome"]) 4? $_GET["nome"] : "");
    echo "<p style='background: red'>".$nome."</p>";
    ***/
?>
    <article>
    <div class="well">
        <h3>Todos os alunos logados:</h3>
        
        <table class="table table-striped black">
        <tr>
            <td><b>Nome</b></td>
            <td><b>Pront.</b></td>
            <td><b>Dia acessado</b></td>
            <td><b>Hora</b></td>
            <td><b>Tipo de Teste</b></td>
            <td><b>Campus</b></td>
            <td><b>Estado</b></td>
        </tr>
        <?php
            //Faz a query conectando ao BD, depois seleciona e
            //o comando fetch transforma em array e o MYSQLI_NUM
            //Faz com que venha em uma array c/ índ.numérico.
            $sql = 'SELECT nome,pront,dia,hora,tipo,campus,estado FROM alunos_ifsp ORDER BY id ASC';
            $cons = $pdo->query($sql);
            $lines = $cons->fetchAll();
            //$query = mysqli_query($connect,'SELECT nome,pront,dia,hora,tipo,campus,estado FROM alunos_ifsp ORDER BY id DESC')->fetch_all(MYSQLI_NUM);
            
            //echo var_dump($query).'<br>';
            for($x=0;$x< count($lines);$x++){
                //Gambiarra de tabela bonita e bem feita :)
                echo '<tr>'
                .'<td>'.$lines[$x][0].'</td>'
                .'<td>'.$lines[$x][1].'</td>'
                .'<td>'.$lines[$x][2].'</td>'
                .'<td>'.$lines[$x][3].'</td>'
                .'<td>'.$lines[$x][4].'</td>'
                .'<td>'.$lines[$x][5].'</td>'
                .'<td>'.$lines[$x][6].'</td>'
                .'</tr>';
            }
            
             //var_dump(get_defined_vars());          
        ?>
     </table>
    </div>
    </article>
    
<?php require_once("views/footer.php"); ?>