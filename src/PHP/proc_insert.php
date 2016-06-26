<?php
include "auth.php";//Подключаем БД
$query1 = "call insert_by_id('$_GET[insertname]');";//делаем запрос на категории
$result1 = mysql_query($query1) or die(mysql_error());
$query = "call select_all();";//делаем запрос на категории//делаем запрос на категории
$result = mysql_query($query) or die(mysql_error());
?>
<html>
<HEAD>
<meta charset="utf-8" />
<link rel='stylesheet' href='../css/bootstrap.min.css' type='text/css' media='all'>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
</HEAD>
<body>
    <table class="table table-bordered">
    <tr>
        <td>ID</td>
        <td>NAME</td>
<!--<input id="add" type="button" name="add" value="Добавить" onclick="addrow ()" /> -->
    </tr>
    
<?php
    //Выводим значение ID и NAME
    $row1=mysql_fetch_array($result1);
    while ($row=mysql_fetch_array($result))
        {
        echo "<tr>
                   <td class='edit'>".$row['id']."</td>
                   <td class='edit'>".$row['name']."</td> 
               <tr>";
        }
?>
    </table>
<a href="#" OnClick="history.back();">Назад</a>
</body>
</html>

