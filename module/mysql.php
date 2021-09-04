<?php

/* Подключение к серверу MySQL */


function sql_query($var)
{
 $link = mysqli_connect(
            '127.0.0.1:3306',  /* Хост, к которому мы подключаемся */
            'root',       /* Имя пользователя */
            '',   /* Используемый пароль */
            'test1');     /* База данных для запросов по умолчанию */
   
    if (!$link) {
   printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
   exit;
}
    if ($result = mysqli_query($link, $var)) {
    $arr = [];

    /* Выборка результатов запроса */
    while( $row = mysqli_fetch_assoc($result) ){
        $arr[]=$row;
    }

    /* Освобождаем используемую память */
    mysqli_free_result($result);
    }
    mysqli_close($link);
    return $arr;
}

?>