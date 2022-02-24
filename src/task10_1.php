<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
>
    <title>form</title>
</head>
<body>
    <form action="task10_2.php" method="post" >
        <lable>NAME</lable>
        <input type="text" name="name"><br>
        <lable>EMAIL</lable>
        <input type="text" name="email"> <br>
        <lable>ABOUT</lable>
        <input type="text" name="about"><br>
        <input type="submit" name="submit" value="log in">
    </form>
    
</body>
</html>