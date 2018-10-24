                                <!--Modals e Popups-->
                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Melhores Alunos:</h4>
                                </div>
                                <div class="modal-body">

                                    <?php include("views/last_users.php"); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modals e popups -->
                        
            <footer>
                <div class="wrapper">

                    <p>Copyright &copy; 2017 - 2018</p>
                    <p>Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Câmpus Caraguatatuba</p>
                    <p>Técnico em Informática para Internet - 1&ordm; Módulo</p>
                    <p><a href="admin.php">Área de administração</a></p>
                </div> <!-- .wrapper -->
            </footer>
        </div>
        <script>init();</script>
        <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>   
</html>