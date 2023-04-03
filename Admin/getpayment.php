<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html lang="en">
<head>
</head>
<body>        
<tr>    
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>

        <h3>I got my salary. Thank you Admin <?=$_SESSION['username']?></h1> </h3>


 <button><a href="welcome.php"> Back </a></button>
</body>
</html>

<?php 
    }else{
        header('location: Homepage.php'); 
    }
?>