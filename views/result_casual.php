<?php
 $acerto = 0;
 $nomec = $_COOKIE['usuario'];
 ?>

<table class="card table-striped table-hover" style="margin:0px auto;">
 	<tr>
 		<th>Questão</th>
 		<th>Alternativa</th>
 		<th>Resposta</th>
 	</tr>
 	<tr>
 		<th>1</th>           		
 		<td>
 			<?php if($_POST['q1'] == 3){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q1'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q1']."</b>"; 
	 		} ?>
 		</td>
 		<td>3</td>
 	</tr> 

 	<tr>
 		<th>2</th>           		
 		<td><?php if ($_POST['q2'] == 2){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q2'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q2']."</b>"; 
	 		} ?></td>
 		<td>2</td>
 	</tr> 
 	
 	<tr>
 		<th>3</th>           		
 		<td>
 			<?php if($_POST['q3'] == 1){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q3'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q3'].'</b>'; 
	 		} ?>
 		</td>
 		<td>1</td>
 	</tr> 
 	
 	<tr>
 		<th>4</th>           		
 		 		<td>
 			<?php if($_POST['q4'] == 1){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q4'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q4'].'</b>'; 
	 		} ?>
 		</td>
 		<td>1</td>
 	</tr> 
 	
 	<tr> 		
 		<th>5</th>           		
 		 		<td>
 			<?php if($_POST['q5'] == 4){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q5'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q5'].'</b>'; 
	 		} ?>
 		</td>
 		<td>4</td>
 	</tr> 
 	
 	<tr>
 		<th>6</th>           		
 		<td>
 			<?php if($_POST['q6'] == 4){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q6'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q6'].'</b>'; 
	 		} ?>
 		</td>
 		<td>4</td>
 	</tr> 
 	
 	<tr>
 		<th>7</th>           		
 		<td>
 			<?php if($_POST['q7'] == 2){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q7'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q7'].'</b>'; 
	 		} ?>
 		</td>
 		<td>2</td>
 	</tr> 
 	
 	<tr>
 		<th>8</th>           		
 		<td>
 			<?php if($_POST['q8'] == 2){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q8'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q8'].'</b>'; 
	 		} ?>
 		</td>
 		<td>2</td>
 	</tr> 
 	
 	<tr>
 		<th>9</th>           		
 		<td>
 			<?php if($_POST['q9'] == 3){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q9'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q9'].'</b>'; 
	 		} ?>
 		</td>
 		<td>3</td>
 	</tr> 
 	
 	<tr>
 		<th>10</th>           		
<td>
 			<?php if($_POST['q10'] == 1){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q10'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q10'].'</b>'; 
	 		} ?>
 		</td>
 		<td>1</td>
 	</tr> 
 	 </table>
 <br><br>
 
 
 <p class="card">
  <b>SUA NOTA FINAL FOI:</b><br>
  <span class="nota">- <?php echo ($acerto*10/10); ?> -</span><br>
  Você acertou <?php 
    echo $acerto; 
    mysqli_query($connect,
    "UPDATE alunos_ifsp 
    SET nota = '$acerto'
    WHERE nome = '$nomec'"
    );
  ?> perguntas de 10.
 </p>
 
 
  
<?php

 ?>