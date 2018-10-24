 <?php 
 date_default_timezone_set("America/Sao_Paulo");
 require_once('tye_config.php');
 
 /*
  Se no PHP.ini do servidor, a opção output_buffering estiver com o valor
  0 ou Off, o header(location) não vai redirecionar a página
  Não descobri o porque...
  */
 
	if($_POST['dificuldade'] == 1){
	 //A funçào header() não precisa do caminho root aqui...
  header('Location: questionario_casual.html');
  }
  else{
  	  header('Location: questionario.html');
  }
?>

<?php
  $line = "\n";
  $log = 'sessoes.log'; // Nome do arquivo Log
  $browserAgent = $_SERVER['HTTP_USER_AGENT'];

  $nome = $_POST['nome'];
  $pront = $_POST['pront'];
  $campus = $_POST['campus'];
  $estado = $_POST['estado'];
  $nasc = $_POST['nasc'];
  $curso = $_POST['curso'];
  $modulo = $_POST['modulo'];
  $tipo = $_POST['tipo'];
  $dia = date("Y/m/d");
  $hora = date("h:i:sa");
  $ua = $_SERVER['HTTP_USER_AGENT'];
  $tipoaluno = $_POST['tipoaluno'];
  $dif = $_POST['dificuldade'];
  
  if($tipoaluno == 'IF'){
      setcookie('tipoaluno',$tipoaluno);
      mysqli_query($connect,"INSERT INTO alunos_ifsp (nome,pront,curso,campus,estado,nasc,modulo,tipo,dif,dia,hora,ua)
    	  VALUES ('$nome','$pront','$curso','$campus','$estado','$nasc','$modulo','$tipo',$dif,'$dia','$hora','$ua')");
    }
    else{
      setcookie('tipoaluno',$tipoaluno);
      mysqli_query($connect,"INSERT INTO visitantes (nome,campus,estado,nasc,tipo,dif,dia,hora,ua)
    	  VALUES ('$nome','$campus','$estado','$nasc','$tipo',$dif,'$dia','$hora','$ua')");

    }
    
  //Informacoes do Login para o arquivo de Texto
  //(OBSOLETO, USAMOS O BD AGORA P/ GUARDAR OS USERS)
  $infos = "Nome: ".$_POST['nome']
  .PHP_EOL."Tipo de Aluno: ".$_POST['tipoaluno']
  .PHP_EOL."Prontuário: ".$_POST['pront']
  .PHP_EOL."Câmpus: ".$_POST['campus']
  .PHP_EOL."Estado: ".$_POST['estado']
  .PHP_EOL."Curso: ".$_POST['curso']
  .PHP_EOL."Módulo: ".$_POST['modulo']
  .PHP_EOL."Data de nascimento: ".$_POST['nasc']
  .PHP_EOL."Tipo: ".$_POST['tipo']
  .PHP_EOL."Dia: ".date("d/m/Y")
  .PHP_EOL."Hora: ".date("h:i:sa")
  .PHP_EOL."UA: ".$_SERVER['HTTP_USER_AGENT']
  .PHP_EOL." ".PHP_EOL;  //Quebra e pula uma linha

  //Escreve no arquivo de texto
  //Podia usar fopen e fwrite, mas isso aqui é muito prático
  file_put_contents($log,$infos,FILE_APPEND);
  
?>