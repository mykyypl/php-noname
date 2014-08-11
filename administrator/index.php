<!DOCTYPE html>
<!--
Prawa Marcin Kukliński
mykyy17@gmail.com
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<?php
include('/administrator/lock.php');
if (is_resource($db)) {
    ?>
    
    <body>
            <h1>Welcome <?php echo $login_session; ?></h1> 
            <h2><a href="http://9lessons.blogspot.com">9lessons.blogspot.com</a></h2>

            <h2><a href="/administrator/logout.php">Sign Out</a></h2>
      
    <?php
} else {
    echo "Brak połączenia z bazą danych!";
}
?>
         </body>
    </html>