<?php

class Http
{

/**
 * 
 * redirige vers l'url passé en parametre
 * @param string $url
 */

public static function redirect(string $url) : void 

{

    header('Location: '.$url);
    
}

}