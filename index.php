<?php
error_reporting(0);
$menu = $_GET['m'];
include "lib.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html;
        charset=iso-8859-1" />
    <title>ALGORITMA CAESAR CIPHER ROT13</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="tabmenu">
        <ul id='subtabmenu'>
            <li <?php if ($menu == "") {
                    echo " class=\"aktiv\" ";
                } ?>>
                <a href="./" title='Home'>Home</a>
            </li>
            <li <?php if ($menu == "rot13") {
                    echo " class=\"aktiv\" ";
                } ?>>
                <a href='?m=rot13'>Enkripsi</a>
            </li>
            <li <?php if ($menu == "d_rot13") {
                    echo " class=\"aktiv\" ";
                } ?>>
                <a href='?m=d_rot13'>Dekripsi</a>
            </li>
        </ul>
    </div>
    <div id="body">
        <?php
        if ($menu == '') {
            include "home.php";
        } else {
            if (file_exists("$menu.php")) {
                include "$menu.php";
            } else {
                echo "Modul tidak ditemukan...";
            }
        }
        ?>
    </div>
</body>

</html>