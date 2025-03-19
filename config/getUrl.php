<?php

    // Obtém a URL atual
    $urlAtual = $_SERVER['REQUEST_URI'];

    $linkAtivoIndex = null;

    // Devolve o nome da página atual
    if(strpos($urlAtual, 'index') !== false){
        $pagAtual = 'Funilaria Ribeiro | Início';
        $linkAtivoIndex = 'active-link';
    }else{
        $pagAtual = 'Funilaria Ribeiro | Início';
        $linkAtivoIndex = 'active-link';
    }