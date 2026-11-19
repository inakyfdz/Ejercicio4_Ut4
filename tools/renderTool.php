<?php

function renderTool( string $sitio, array $datos)
{
    $plantilla = searchInView($sitio);
    if ($plantilla === null){
        http_response_code(404);
        echo "<h1> Pagina no encontrada </h1>";
    }else{
        if($datos == null){
            $datos = [
                'titulo' => $sitio,
                'cabecera1' => '',
                'pie1' => ''
            ];
        }
        extract($datos);

        $raiz = dirname(__DIR__);

        require $raiz . '/views/common/header.php';
        require $plantilla;
        require $raiz . '/views/common/footer.php';
    }

}

function searchInView(string $sitio){
    $raiz = dirname(__DIR__);
    $ruta = $raiz."/views".$sitio."php";
    if(file_exists($ruta) && is_file($ruta)){
        return $ruta;
    }
    return null;

}
