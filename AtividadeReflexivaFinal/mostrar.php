<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//Chama a classe e função
require_once 'classe/Curriculo.php';
$informacoes = Curriculo::gerador();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        
        <!-- Mostra dados referente ao contato -->
        <div><h1 class="alinhar">Contato</h1></div>
        <div><h2 class="alinhar"> <?= $informacoes['nome']; ?></h2></div>
        <div><h3 class="alinhar"><?= $informacoes['endereco']; ?></h3></div>
        <div><h3 class="alinhar"><?= $informacoes['email']; ?></h3></div>
        <div><h3 class="alinhar"><?= $informacoes['idade']; ?></h3></div>
        <div><h3 class="alinhar"><?= $informacoes['telefone']; ?></h3></div>
        <div><h3 class="alinhar"><?= $informacoes['objetivo']; ?></h3></div>
            
        <!-- Mostra dados referente a formação -->   
        <?php if($informacoes['formacoes']) { ?>
                <h2>Formação</h2>

                <ul>
                    <?php for($i = 0; $i < sizeof($informacoes['formacoes']['curso']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?=$informacoes['formacoes']['curso'][$i] ?></h4>
                                <p><?= $informacoes['formacoes']['instituicao'][$i] ?></p>
                                <p><?= $informacoes['formacoes']['conclusao'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
        <?php } ?>
        
        <!-- Mostra dados referente a experiência -->
        <?php if($informacoes['experiencias']) { ?>
                <h2>Experiência</h2>

                <ul >
                    <?php for($i = 0; $i < sizeof($informacoes['experiencias']['empresa']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $informacoes['experiencias']['empresa'][$i] ?></h4>
                                <p><?= $informacoes['experiencias']['funcao'][$i] ?></p>
                                <p><?= $informacoes['experiencias']['inicio'][$i] ?></p> 
                                <p><?= $informacoes['experiencias']['fin'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            
            <!-- Guarda os arquivos em um documento. Falta melhorar -->
            <?php
            
            $a = json_encode($informacoes);
            
            file_put_contents("dados.txt", $a."\n", FILE_APPEND);
            
            ?>
    
    <!-- Função em Javascript responsável por imprimir ou salvar em pdf ou outro tipo de aerquivo -->
    <script>
        window.print();
    </script>
        
    </body>
</html>
