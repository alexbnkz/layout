<?php

function inc($filename) {
	$filename = $_SERVER['DOCUMENT_ROOT'].'/'.str_replace('.', '/', $filename).'.php';
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

// colocar configurações do banco
