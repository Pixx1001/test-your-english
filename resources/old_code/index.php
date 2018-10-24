<?php
    require_once('views/header.php');
    require_once('views/nav.php'); ?>
    
            <div class="container">
                <div class="wrapper">
                    <div class="colarticle">
                        <article>  
                            <h1 class="well">Bem Vindo!</h1>

                            <p class="well">
                                Teste suas habilidades nesse website com questões que vão testar
                                seu conhecimento em inglês com questões de audio, gramática, leitura e vocabulário.<br/>
                                Antes de começarmos,responda a este pequeno formulário para poder começar o Teste:
                            </p>
                            <div id="checaAluno" class="cadastro center">
                                <h3>Antes de prosseguir para o questionário:</h3>
                                <p>Você é:</p>
                                <button id="alunoif" class="btn botaop"><span class="glyphicon glyphicon-ok"></span> Aluno do Instituto Federal</button><br><br>
                                <button id="naoaluno" class="btn botaop"><span class="glyphicon glyphicon-remove"></span> Aluno de outra escola/faculdade</button><br><br>
                                <p class="alert alert-info ">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    Caso você não esteja estudando nesse ano, poderá colocar<br> o nome da sua última
                                    escola/faculdade em que você estudou.
                                </p>


                            </div>
                            <br>

                            <form id="cadastro" name="cadastro" class="cadastro oculta" method="post" action="login.php" onsubmit="return login(this);">
                                <p>Informacões básicas:</p>
                                <label class="simple">Nome:</label> <input placeholder="Digite o Nome Completo" type="text" name="nome" required> 
                                <label class="simple" id="lpront">Prontuário:</label> <input placeholder="Digite o Prontuário" type="text" name="pront" id="pront">
                                <div class="grouped">
                                    <label class="simple">Câmpus/Escola e Estado :</label><br>
                                    <input placeholder="Escola ou câmpus" type="text" name="campus" id="campus">          
                                    <select name="estado" id="estado">  
                                        <option value="sp">SP</option>
                                        <option value="rj">RJ</option>
                                        <option value="mg">MG</option>
                                        <option value="pa">PA</option>
                                        <option value="sc">SC</option>
                                        <option value="es">ES</option>
                                        <option value="pa">PA</option>
                                        <option value="outro">N/A</option>

                                    </select>
                                </div>
                                <label class="simple">Data de Nascimento:</label> <input type="date" name="nasc">
                                <label class="simple" id="lcurso">Curso: </label>
                                <select name="curso" id="curso">
                                    <option>Informática</option>
                                    <option>Administração</option>
                                    <option>Meio Ambiente</option>
                                    <option>Edificações</option>
                                    <option>Outro curso...</option>
                                </select>
                                <label class="simple" id="lmodulo">Módulo: </label>
                                <select name="modulo" id="modulo">
                                    <option>1° Módulo</option>
                                    <option>2° Módulo</option>
                                    <option>3° Módulo</option>
                                    <option>4° Módulo</option>
                                </select>
                                <label class="simple">Tipo de teste: </label>
                                <select name="tipo">
                                    <option>Leitura</option>
                                </select>
                                <label class="simple">Dificuldade: </label>
                                <select name="dificuldade">
                                    <option value="1" checked>Casual - Ilimitado - 10 perguntas</option>
                                    <option value="2">Avançado - Ilim. - 25 perguntas</option>
                                </select>
                                <input type="hidden" value="" id="tipoaluno" name="tipoaluno">
                                <input type="submit" value="Começar o teste >>"/>
                            </form>
                            <p class="termos alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                Esse site foi criado apenas para fins acadêmicos e não visa nenhum fim lucrativo. 
                                Erros e bugs são esperados. 
                            </p>
                        </article>

                        <div class="push"></div>
                    </div>

                    <!--
                    <div class="avisos">
                    <p style="font-size:22px;"> Notícias do site:</p>
                    <hr style="border: none; border-bottom:1px solid #BB1B26;"/>
                    <br/>
                    <h4>Site em manutenção <span style="float:right;">22/06/2017</span> </h4>
                    <br/>
                    <p>Infelizmente o sistema de respostas
                    e acertos deste site ainda não está completo... aguarde para que daqui
                    algum tempo nós possamos completar e assim, você possa corrigir seu teste.</p>
                    </div>
                    -->
                    <div class="avisos">
                        <p class="newshead" style="font-size:22px;"><span class="glyphicon glyphicon-warning-sign aviso"></span> Notícias:
                            <span id="showOld" class="glyphicon glyphicon-chevron-down" style="font-size:16px; margin-top:15px; float:right;" onclick="old();"></span>
                        </p>

                        <hr style="border: none; border-bottom:1px solid #BB1B26;"/>
                        <br/>

                        <h4>Melhorias no Design! <span style="float:right;">08/08/2017</span> </h4>
                        <br/>
                        <p>
                            Aproveite a nova interface do site com fontes mais legíveis e cores leves.
                            O site agora também é responsivo (Adaptado para celulares e outros aparelhos)
                            A equipe deseja a você uma boa leitura e boa sorte nos testes. Não 
                            hesite em mandar um feedback para a equipe. Seu apoio é importante.
                            <br>
                            <br/>

                            <br/>
                        </p>


                        <div id ="oldNews" class="oldNews">

                            <h4>Correção do teste! <span style="float:right;">25/07/2017</span> </h4>
                            <br/>
                            <p>
                                Agora  você pode corrigir o teste! em breve melhoraremos o site
                                para uma avaliação mais detalhada do teste.

                                <br/>

                                <br/>
                            </p>

                            <h4>Novo sistema de Login! <span style="float:right;">12/07/2017</span> </h4>
                            <br/>
                            <p>
                                Agora seu nome é guardado em um Cookie e você poderá ver seu nome.
                                Enquanto você não sair da sessão, seu nome continuará a ficar visível
                                no site. A sessão expira automaticamente em 24 horas. Aguarde para mais novidades
                                sobre o sistema de perguntas e acertos!</p><br/>
                            <h4>Site em manutenção <span style="float:right;">22/06/2017</span> </h4>
                            <br/>
                            <p>Infelizmente o sistema de respostas
                                e acertos deste site ainda não está completo... aguarde para que daqui
                                alguns dias possamos resolver</p>

                        </div><!--oldNews -->
                    </div> <!-- avisos-->
                    


                </div> <!-- .wrapper -->

            </div> <!-- #page -->

<?php require_once('views/footer.php'); ?>