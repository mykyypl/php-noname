<?php

include('/administrator/config.php');
if (is_resource($db)) {

    session_start();
    $user_check = $_SESSION['login_user'];

    $ses_sql = mysql_query("select username from admin where username='$user_check' ");

    $row = mysql_fetch_array($ses_sql);

    $login_session = $row['username'];

    if (!isset($login_session)) {
        header("Location: /administrator/login.php");
    }
} else {
    echo"Brak połączenia z bazą danych!";
}
?>