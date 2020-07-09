<?php

function radio($request){
    
    $info=json_decode($request->getbody());
    $r=$info->r;
    $respuesta=(($r*$r)*3.1416)/2;
    return json_encode($respuesta);

}