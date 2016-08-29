<?php
include_once 'config.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM Users WHERE ID=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{

 $ID = $_POST['id'];
 $Nombre = $_POST['name'];
 $Carrera = $_POST['career'];
 $Sexo = $_POST['gender'];
 $Edad = $_POST['age'];



 $sql_query = "UPDATE Users SET ID='$ID',Nombre='$Nombre',Carrera='$Carrera',Sexo='$Sexo',Edad='$Edad' WHERE ID=".$_GET['edit_id'];

 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('OH! Haz actualizado el id con exito!');
  window.location.href='../index.php';
  </script>
  <?php
 }
 else
 {
  ?>
   <script type="text/javascript">
      alert('OHHH!! Tenemos problemas');
    </script>
  <?php
 }

}
if(isset($_POST['btn-cancel']))
{
 header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
    <td><input type="text" name="id" placeholder="ID" value="<?php echo $fetched_row['ID']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Nombre" value="<?php echo $fetched_row['Nombre']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="career" placeholder="Carrera" value="<?php echo $fetched_row['Carrera']; ?>"required /></td>
    </tr>
     <tr>
    <td><input type="text" name="gender" placeholder="Sexo" value="<?php echo $fetched_row['Sexo']; ?>"  required /></td>
    </tr>
     <tr>
    <td><input type="text" name="age" placeholder="Edad" value="<?php echo $fetched_row['Edad']; ?>"  required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>Actualizar!</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancelar</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>