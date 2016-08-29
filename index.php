<?php
include_once './php/config.php';


if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM Users WHERE ID = ".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");

}

?>

<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPapp - By FF </title>

<link rel="stylesheet" href="./css/style.css" type="text/css" />
<script src="./js/tools.js"></script>

</head>

<body>
<center>

<div id="header">
 <div id="content">
    <label>PHPapp</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
        <th colspan="5"><a href="./php/add_data.php">Cambia la info aqui.</a></th>
    </tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Carrera</th>
        <th>Edad</th>
        <th>Genero</th>

        <th colspan="2">Tools</th>
    </tr>

<?php
 $sql_query="SELECT * FROM Users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set)){
?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
     <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')">
            <img src="./assets/edit.svg" align="EDIT" />
        </a></td>
     <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">
            <img src="./assets/file.svg" align="DELETE" />
        </a></td>
     </tr>
 <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>