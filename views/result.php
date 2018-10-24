<?php
    $acerto = 0;
    $nomec = $_COOKIE['usuario'];
?>
<table class="card table-striped " style="margin:0px auto;">
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
 	
 	<tr>
 		<th>11</th>           		
 		<td>
 			<?php if($_POST['q11'] == 2){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q11'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q11'].'</b>'; 
	 		} ?>
 		</td>
 		<td>2</td>
 	</tr> 
 	
 	<tr>
 		<th>12</th>           		
 		<td>
 			<?php if($_POST['q12'] == 1){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q12'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q12'].'</b>'; 
	 		} ?>
 		</td>
 		<td>1</td>
 	</tr> 
 	
 	<tr>
 		<th>13</th>           		
 		<td>
 			<?php if($_POST['q13'] == 4){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q13'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q13'].'</b>'; 
	 		} ?>
 		</td>
 		<td>4</td>
 	</tr> 
 	
 	<tr>
 		<th>14</th>           		
 		<td>
 			<?php if($_POST['q14'] == 2){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q14'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q14'].'</b>'; 
	 		} ?>
 		</td>
 		<td>2</td>
 	</tr> 
 	
 	<tr>
 		<th>15</th>           		
 		<td>
 			<?php if($_POST['q15'] == 1){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q15'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q15'].'</b>'; 
	 		} ?>
 		</td>
 		<td>1</td>
 	</tr>
 	
 	<tr>
 		<th>16</th>           		
<td>
 			<?php if($_POST['q16'] == 3){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q16'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q16'].'</b>'; 
	 		} ?>
 		</td>
 		<td>3</td>
 	</tr> 
 	
 	<tr>
 		<th>17</th>           		
 		<td>
 			<?php if($_POST['q17'] == 3){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q17'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q17'].'</b>'; 
	 		} ?>
 		</td>
 		<td>3</td>
 	</tr> 
 	
 	<tr>
 		<th>18</th>           		
 		<td>
 			<?php if($_POST['q18'] == 5){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q18'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q18'].'</b>'; 
	 		} ?>
 		</td>
 		<td>5</td>
 	</tr> 
 	
 	<tr>
 		<th>19</th>           		
 		<td>
 			<?php if($_POST['q19'] == 4){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q19'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q19'].'</b>'; 
	 		} ?>
 		</td>
 		<td>4</td>
 	</tr> 
 	
 	<tr>
 		<th>20</th>           		
 		<td>
 			<?php if($_POST['q20'] == 2){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q20'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q20'].'</b>'; 
	 		} ?>
 		</td>
 		<td>2</td>
 	</tr>
 	
 	 	<tr>
 		<th>21</th>           		
 		<td>
 			<?php if($_POST['q21'] == 2){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q21'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q21'].'</b>'; 
	 		} ?>
 		</td>
 		<td>2</td>
 	</tr> 
 	
 	<tr>
 		<th>22</th>           		
 		<td>
 			<?php if($_POST['q22'] == 4){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q22'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q22'].'</b>'; 
	 		} ?>
 		</td>
 		<td>4</td>
 	</tr> 
 	
 	<tr>
 		<th>23</th>           		
 		<td>
 			<?php if($_POST['q23'] == 1){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q23'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q23'].'</b>'; 
	 		} ?>
 		</td>
 		<td>1</td>
 	</tr> 
 	
 	<tr>
 		<th>24</th>           		
<td>
 			<?php if($_POST['q24'] == 4){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q24'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q24'].'</b>'; 
	 		} ?>
 		</td>
 		<td>4</td>
 	</tr> 
 	
 	<tr>
 		<th>25</th>           		
 		<td>
 			<?php if($_POST['q25'] == 2){
 			$acerto++;
 			echo '<b class="ok">'.$_POST['q25'].'</b>';
	 		}
	 		else{
	 		echo '<b class="erro">'.$_POST['q25'].'</b>'; 
	 		} ?>
 		</td>
 		<td>2</td>
 	</tr>  	      	
 </table>
 <br><br>
 
 
 <p class="card">
  <b>SUA NOTA FINAL FOI:</b><br>
  <span class="nota">- <?php 

  $notaFinal = $acerto*10/25;
  echo ($notaFinal); 
  mysqli_query($connect,"UPDATE alunos_ifsp SET nota = '$notaFinal' WHERE nome = '$nomec'");
  
  ?> -</span><br>
  Você acertou <?php echo $acerto; ?> perguntas de 25.
 </p>
 