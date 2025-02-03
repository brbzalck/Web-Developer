<?php 

    // Tem a mesma função, porêm o retorno é diferente em caso de erro
    include("menu.php"); // warning - avisa e continua(caso not found)
    require("menu.php"); // fatal error - avisa e para(caso not found)
    include_once("menu.php"); // once = uma vez, deixa a inclusão única na página
    require_once("menu.php"); // once = uma vez, deixa a inclusão única na página
?>
conteúdo da página (minha rede)
<hr>
<?php 

include_once("menu.php"); // warning - avisa e continua(caso not found)
require_once("menu.php"); // fatal error - avisa e para(caso not found)
?>