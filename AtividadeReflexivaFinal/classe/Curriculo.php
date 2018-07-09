<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curriculo
 *
 * @author dario
 */
class Curriculo {
    //Função estática que gera os dados através de um array.
    public static function gerador() {
        //Array responsável por capiturar e enviar dados.
        $informacoes = array(
            'nome' => $_POST['nome'],
            'endereco' => $_POST['endereco'],
            'email' => $_POST['email'],
            'idade' => $_POST['idade'],
            'telefone' => $_POST['telefone'],
            'objetivo' => $_POST['objetivo'],
            'formacoes' => isset($_POST['formacao-curso']) ?
            array(
        'curso' => $_POST['formacao-curso'],
        'instituicao' => $_POST['formacao-instituicao'],
        'conclusao' => $_POST['formacao-conclusao']
            ) : null, //Usuário não possui formação
            'experiencias' => isset($_POST['experiencia-empresa']) ?
            array(
        'empresa' => $_POST['experiencia-empresa'],
        'funcao' => $_POST['experiencia-funcao'],
        'inicio' => $_POST['experiencia-inicio'],
        'fin' => $_POST['experiencia-fim'],
            ) : null //Usuário não possui experiência
        );
        
        return $informacoes;
        }
        
        

}
