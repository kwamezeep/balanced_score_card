<?php

define('DBserver','localhost');
define('DBusername','root');
define('DBpassword','');
define('DBname','rec_off');

$conn= mysqli_connect(DBserver,DBusername,DBpassword,DBname);

if  ($conn==false){die("error: could not connect".mysqli_connect_error());}
?>
