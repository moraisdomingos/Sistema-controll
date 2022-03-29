<?php

    spl_autoload_register(function ($classe) {

        $diretorios = [
            'Library',
            'Helpers'
        ];

        foreach($diretorios as $diretorio):

            $diretory = (__DIR__. DIRECTORY_SEPARATOR. $diretorio. DIRECTORY_SEPARATOR. $classe. '.php');

            if(file_exists($diretory)):
                require_once $diretory;
            endif;
        endforeach;
    }); 