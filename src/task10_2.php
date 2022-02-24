<?php
  session_start();
?>
<?php
 if(isset($_POST["submit"])){
     $_SESSION["name"] = $_POST["name"];
     $_SESSION["email"] = $_POST["email"];
     $_SESSION["about"] = $_POST["about"];

     echo $_SESSION["name"];
     echo '<br>';
     echo $_SESSION["email"];
     echo '<br>';
     echo $_SESSION["about"];
     echo '<br>';

 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>log out</title>
</head>
<body>
      <form action="task10_1.php" method="post" >
         <input type="submit" name="submit1" value="log out">
      </form>
    
</body>
</html>
<?php 
 if(isset($_POST["submit1"])) {
     session_destroy();
 }
?>