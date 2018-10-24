//-Isso aqui ajuda a manter os cookies atualizados antes
//de mandar pra página final.php.

//-De alguma maneira, se a última questão te levar diretamente
//para a página final.php e não passar por essa antes,
//você teria que atualizar a página para ver os cookies
//mostrados na página corretamente.

//-Talvez porquê a página carrega os cookies antes de renderizar
//as tags e etc?

<?php require ("queststore.php"); ?>
<?php header("Location: /final.php"); ?>