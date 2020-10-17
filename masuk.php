<?php 
include "koneksi.php";

if (isset($_POST['masuk'])){
$username=$_POST['nisn'];
$password=$_POST['password'];

$query = mysql_query("Select * from rb_siswa where nisn ='$username' and password ='$password'");
$cekdata = mysql_num_rows($query);
if ($cekdata > 0) {
$data = mysql_fetch_array($query);
$status=$data['status'];
echo $status;
if ($status == "admin")
{
?><script language="javascript">document.location.href="admin.php";</script><?php
}
else if ($status == "guru")
{
?><script language="javascript">document.location.href="guru.php";</script><?php
}
else{
?><script language="javascript">document.location.href="siswa.php";</script><?php
}
}else{
header('Location:k2.php?masuk=Maaf password atau username anda salah!');
} 
}else{
unset($_POST['masuk']);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  padding-top: 10%;
  }
* {
  box-sizing: border-box;
  }

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: MediumBlue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid MediumBlue;
}

/* Set a style for the submit button */
.btn {
    background-color: MediumBlue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    color: #111;
    padding: 20px;
    margin: auto;
}
</style>
</head>
<body>

<form action="" method="post" style="max-width:500px;margin:auto">
  <div class="container">
   <h2>Login Siswa</h2>
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Username" name="nisn" maxlength="10" value="">
    <span class="help-block"></span>
    
  </div>
  
  <div class="input-container"> 
    <input class="input-field" type="password" placeholder="Password" name="password" maxlength="10" value="">
    <span class="help-block"></span>
    
  </div>
  <button type="submit" class="btn" name="masuk"><b>Masuk</b></button>
  </div>
</form>
</body>
</html>