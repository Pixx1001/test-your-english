<div class="well">
    <h3>Melhores Alunos:</h3>
    
    <table class="table table-striped black">
    <tr>
        <td><b>Nome</b></td>
        <td><b>Hora do Acesso</b></td>
        <td><b>Dificuldade</b></td>
        <td><b>Nota</b></td>
    </tr>
    <?php

        $sql = 'SELECT nome,hora,dif,nota FROM alunos_ifsp ORDER BY nota DESC';
        $cons = $pdo->query($sql);
        $lines = $cons->fetchAll();

        
        //$query = mysqli_query($connect,'SELECT nome,hora,dif,nota FROM alunos_ifsp ORDER BY nota DESC')->fetch_all(MYSQLI_NUM);
        // echo var_dump($query).'<br>';

        for($x=0;$x< count($lines);$x++){
            echo '<tr>'
            .'<td>'.$lines[$x][0].'</td>'
            .'<td>'.$lines[$x][1].'</td>'   
            .'<td>'.$lines[$x][2].'</td>'                        
            .'<td>'.$lines[$x][3].'</td>'                 
            .'</tr>';
        }

    ?>
    </table>
</div>