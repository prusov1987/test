
<?php
if (!$link = mysql_connect('localhost', 'root', 'root')) {
    echo 'Не удалось подключиться к mysql';
    exit;
}
if (!mysql_select_db('1LineSoft', $link)) {
    echo 'Не удалось выбрать базу данных';
    exit;
}
?>


