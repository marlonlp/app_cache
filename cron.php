<?php
date_default_timezone_set('America/Sao_Paulo');
$dir = "./";

    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            $return =  "<ul>\n";    
            while (($file = readdir($dh)) !== false) {
                if ($file != "." && $file != ".." && $file != "Thumbs.db") {
                    $return .= "<li class='foto'>".$dir.$file." - " . date("d/m/Y - H:i", filectime($dir . $file))." - ". date("d/m/Y - H:i", filemtime($dir.$file)) . "</li>";
                }
            }
            $return .= "</ul>\n";    
            closedir($dh);
            echo $return;
        }
    } else {
        echo "Erro";
    }                
?>