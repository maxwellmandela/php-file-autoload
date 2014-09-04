<?php
        $dir = array(
        'directory1/',
        'directory2/subdirectory/',
        'directory3/subdirectory1/subdirectory2');
        
        foreach ($dir as $value) {    
            $file = glob($value."*.{php,html,js}", GLOB_BRACE);
            foreach ($file as $key) {
                include $key;
            }
    }