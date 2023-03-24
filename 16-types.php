<?php 
declare (strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado):string{
    if($autenticado){
        return "Usuario Autenticado";
    }else{
        return "Usuario no Autenticado";
    }
}
function usuarioProbado(bool $autenticado):void{
    if($autenticado){
        echo "Usuario Autenticado";
    }else{
        echo "Usuario no Autenticado";
    }
}
function usuarioPrueba(bool $autenticado):string|int{//RETORNANDO 2 TIPOS DE DATOS
    if($autenticado){
        return "Usuario Autenticado";
    }else{
        return 1;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;

$usuario = usuarioPrueba(false);
echo $usuario;



include 'includes/footer.php';