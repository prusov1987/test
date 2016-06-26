<?php
include "auth.php";
$query = "call select_all();";
$result = mysql_query($query) or die(mysql_error());
?>
<html>
<HEAD>
<meta charset="utf-8" />
<link rel='stylesheet' href='../css/bootstrap.min.css' type='text/css' media='all'>
</HEAD>
<body>
    <table class="table table-bordered">
    <tr>
        <td>ID</td>
        <td>NAME</td>
    </tr>
<?php
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
