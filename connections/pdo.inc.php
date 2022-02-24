<?php
error_reporting(15);

if ($_SERVER['SERVER_NAME'] != "localhost")
{
  $_hostname = ""; //
  $_port=""; 
  $_username = "";
  $_password = "";
  $_database = "";
  
  
}
else
{
  $_hostname = "localhost";
  $_port = ""; // voor wamp --> vb "port=3306;
  $_username = "root";
  $_password = "root"; // lege string voor WAMP/XAMP
  $_database = "db_mediabroadcast";
}
  $_PDO = new PDO("mysql:host=$_hostname;$_port dbname=$_database","$_username", "$_password");
  
  $_PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




?>