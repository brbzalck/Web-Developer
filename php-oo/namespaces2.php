<?php

    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    // só é possível utilizar 01(um) use
    use A\Cliente as C1;
    // sendo necessário nomear use com AS
    use B\Cliente as C2;
    


    $x = new C1;
    print_r($x);
    echo $x->__get('nome');
    $y = new C2;
    print_r($y);
    echo $y->__get('nome');


?>