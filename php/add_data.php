<?php
include_once 'config.php';
if(isset($_POST['btn-save']))
{

 $ID = $_POST['id'];
 $Nombre = $_POST['name'];
 $Carrera = $_POST['career'];
 $Sexo = $_POST['gender'];
 $Edad = $_POST['age'];

 $sql_query = "INSERT INTO Users(ID,Nombre,Carrera,Edad,Sexo) VALUES('$ID','$Nombre','$Carrera','$Edad','$Sexo')";

 if(mysql_query($sql_query)){
  
?>

    <script type="text/javascript">
      alert('Cool, insertaste los datos!');
       window.location.href='../index.php';
    </script>
<?php
 }
 else{
?>
    <script type="text/javascript">
      alert('OHHH!! Tenemos problemas');
    </script>
<?php
 }
}
?>


<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>PHPapp - By FF </title>

<link rel="stylesheet" href="../css/style.css" type="text/css"/>

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
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="../index.php">Volver al inicio!!</a></td>
    </tr>
    <tr>
    <td><input type="text" name="id" placeholder="ID" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Nombre" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="career" placeholder="Carrera" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="gender" placeholder="Genero" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="age" placeholder="Edad" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>Guardar</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>