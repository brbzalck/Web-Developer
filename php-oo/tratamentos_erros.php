<?php
    // tenha uma lógica
    try {

        // tenha uma outra lógica que possa ocorrer um erro(exceção)
        echo '<h3> ### try ### </h3>';

        $sql = 'Select * from clientes';
        // mysql_query($sql); // vai retornar erro

        if(!file_exists('require_arquivo_a.php')) {
            // instanciando da class Exception um throw(lançar)
            // throw new Error('O arquivo não está disnponível, de qlqr forma vamos seguir');
            throw new Exception('O arquivo não está disnponível, de qlqr forma vamos seguir');
            // throw vai lançar na tela qual o erro específico
        }   

        // pegando com o catch algum possível erro do try e salvando na variável $e
    } catch (Error $e) {
        // em quaisquer caso de erro do try, vai passar batido e retornar em $e
        echo '<h3> ### Catch Error### </h3>';
        // pode-se armazenar o erro em algum banco de dados
        echo $e;
    
        // catch para capturar o Exeption e continuar o código sem quebrar
    } catch (Exception $e) {
        // variável $e que recupera o Exception

        echo '<h3> ### Catch Exception### </h3>';
        echo $e;
    }

    // finally sempre vai ser executado
    finally {

        echo '<h3> ### Finally ### </h3>';

    }
    
    // pode haver mais try no decorrer do código


?>