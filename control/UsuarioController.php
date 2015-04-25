<?php

include '../../model/Usuario.php';

class UsuarioController {
    function insert(){
        
    }
    function findAll(){
        $usuario = new Usuario();
        return $usuario->findAll();
        
    }
    
    function  delete(){
        
    }
    
    function  update(){
        
    }
    
}
