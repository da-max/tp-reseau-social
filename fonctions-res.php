<?php

require_once '../DATA/librairie-res.php';

function retourne_auteur()
{
    return explode('/', $_SERVER['REQUEST_URI'])[2];
}
