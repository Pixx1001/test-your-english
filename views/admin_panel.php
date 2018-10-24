<div class="card center">
        
        <h1>Área de Administração</h1>
        <h4>Seja bem vindo, <?=$_SESSION['user']; ?>!</h4>
        <p>escolha o que você deseja fazer:</p>
        <a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=tye_ifsp" class="btn btn-danger"> <span class="glyphicon glyphicon-plus"></span> Adicionar/Remover Notícias</a>
        <button class="btn btn-primary">  <span class="glyphicon glyphicon-pencil"></span> Gerenciar notas e alunos</button>
        <a href="views/session_destroyer.php"><button class="btn btn-warning">  <span class="glyphicon glyphicon-delete"></span>Logoff</button></a>
</div>