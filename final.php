<?php
    error_reporting(E_ALL & ~E_NOTICE);
    include('views/header.php');
    include('views/nav.php');
?>
<div class="container">
		<div class="wrapper">

          <div class="col3">
			<article style="text-align:center;">  
				<h1 id="current" onclick="deleta();" style="color:darkred;">Você terminou de responder as questões.</h1>
				
			  <p>
					 Vamos Ver o resultado do seu questionário:<br><br>
					 
            <?php
							if($_POST['level']==1){
								require_once("views/result_casual.php");
							}
							else{
								require_once("views/result.php");
							}
						?>
						
             <input type="button" onclick="logoff();" value="Refazer o Teste"/>
             <p class="termos">Se você refazer o teste, terá que se identificar de novo.</p>
			  </p>
			</article>
			<div class="push"></div>
		  </div>
		</div> <!-- .wrapper -->

	  </div> <!-- #page -->
<?php include("views/footer.php"); ?>