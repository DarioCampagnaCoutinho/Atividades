<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerador de Currículo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

        <div class="container">
            <div class="jumbotron">
                <h1>Gerador Currículos</h1>
            </div>

            <hr />
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <form method="post" action="mostrar.php" role="form">


                        <div class="col-md-12">
                            <label for="nome">Nome</label>
                            <input id="nome" type="text" name="nome" class="form-control" placeholder="Digite um nome" >
                        </div>
                        <div class="col-md-12">
                            <label for="endereco">Endereço</label>
                            <input id="endereco" type="text" name="endereco" class="form-control" placeholder="Digite um endereço" >
                        </div>
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Digite um email" >
                        </div>
                        <div class="col-md-12">
                            <label for="idade">Idade</label>
                            <input id="idade" type="text" name="idade" class="form-control" placeholder="Digite sua idade" >
                        </div>
                        <div class="col-md-12">
                            <label for="telefone">Telefone</label>
                            <input id="idade" type="text" name="telefone" class="form-control" placeholder="Digite seu telefone" >
                        </div>
                        <div class="col-md-12">
                            <label for="objetivo">Objetivo Profissional</label>
                            <input id="objetivo" type="text" name="objetivo" class="form-control" placeholder="Digite seu objetivo" >
                        </div>


                        <div class="card-body" id="formacoes">
                            <h4 class="card-title">Formação</h4>
                            <button class="btn btn-sm right" id="adicionar-formacao" >Adicionar formação</button>
                        </div>
                        <div class="card-body" id="experiencias">
                            <h4 class="card-title">Experiências</h4>
                            <button class="btn btn-sm right" id="adicionar-experiencia" >Adicionar Experiência</button>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Gerar currículo</button>
                            <button class="btn btn-default" type="reset" >Limpar campos</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/index.js"></script>

    </body>
</html>
