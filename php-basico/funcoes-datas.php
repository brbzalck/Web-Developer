<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        // recuperação da data atual / data corrente
    
        echo date('d/m/Y H:m');

        echo '<br/>'.
        date_default_timezone_get();
        echo '<br/>'.
        date_default_timezone_set('America/Sao_Paulo').'<br/>';
        echo '<br/>'.
        date_default_timezone_get().'<br/>';

        echo date('d/m/Y H:m');

        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        echo '<br><br>';

        // timestamp

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br>';
        echo $data_final . ' - ' . $time_final;

        $diferenca_times = $time_final - $time_inicial;

        echo '<br>';

        $segundos_existem_dia = 24 * 60 * 60;
        $resultado = $diferenca_times / $segundos_existem_dia;

        echo "A diferença entre $data_inicial e $data_final é $resultado dias"


    ?>
</body>
</html>