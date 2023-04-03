<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>

<?php 
session_start();
if (isset($_SESSION['username'])){require 'bar/top1.php';}
else{require 'Homepage.php';}
 ?>
<div class="div">
<img class="p" src="image/Hospital.jpg" align="left" height=400px; width=400px >
</div><br>
<h1 class="welcome, div">Medicines cure diseases,but only doctor can cure patients</h1>
<?php require 'bar/footer.php';?>

</body>
</html>