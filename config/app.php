<?php

function inc($filename) {
    if (is_file($filename.'.php')) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

// colocar configurações do banco
