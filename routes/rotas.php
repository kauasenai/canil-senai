<?php

include "./controller/controlador.php";

$URL = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if($URL == "/site/"){
    mainPage();
}
else if ($URL == "/site/gatos"){
    gatosPage();

}

else if ($URL == "/site/cachorros"){
    cachorrosPage();
    
}


else if ($URL == "/site/peixes"){
    peixesPage();
    
}

else if ($URL == "/site/pesquisa"){
    pesquisaPage();
}

else {
        echo $URL;
    echo "NOT FOUND!!!";
}
?>




