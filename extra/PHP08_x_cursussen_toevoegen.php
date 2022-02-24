<?php
try
{

/****************************************************
*Initialisatie
****************************************************/
$_srv = $_SERVER['PHP_SELF'];

// exception handling funtions 
  include("../php_lib/myExceptionHandling.inc.php"); 
// database connection en selection
  include("../connections/pdo.inc.php"); 
// maak variabele selectie query
  include("../php_lib/createSelect.inc.php");  
// zoek primary key voor t_gemeente  
  include("../php_lib/PK_t_gemeente.inc.php"); 
  
/*******************************************
*    Input en verwerking
********************************************/

if (! isset($_POST["submit"]))  // formulier klaar maken
{
 
    $_output= "
<h1>Cursussen toevoegen</h1>  
<form  method='post' action='$_srv'>
<label>Cursus naam : </label>
<input type='text' name=cursusNaam>
<br>
<label>Cursis id  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
<input type='text' name=cursusId>
<br>
<label>Voorwaarden</label>
<br>
<textarea rows=4 cols=50 name=voorwaarden>
</textarea>
<br><br>
<input type='submit' name='submit' value='Verzenden' >
</form>";


}

else // inhoud formulier verwerken
{
// input uitpakken
$_cursusNaam = $_POST['cursusNaam'];
$_cursusId = $_POST['cursusId'];
$_voorwaarde = $_POST['voorwaarden']; 
// Query samenstellen
$_query = createSelect(
        "t_cursus",
        array($_cursusNaam, $_cursusId), array("d_naam", "d_id"));

// Query naar DB sturen
  $_result = $_PDO -> query("$_query");


// Resultaat verwerken
  if ($_result -> rowCount() > 0)
  {
    $_output = "Cursist $_cursusNaam met een id gelijk aan  $_cursusId  zit al in de database!";
 
  }
  else
  {
    $_query = "INSERT INTO t_cursus 
              (d_naam, d_id, d_voorwaarden)
               VALUES ('$_cursusNaam', '$_cursusId', '$_voorwaarde')";
 
  
    $_PDO -> query("$_query");
  
    $_output = "Cursus $_cursusNaam is toegevoegd";
  }
  
  $_output .= "<br><br><a href='$_srv'>volgende</a>"; 
 }
  

/*****************
 *   output      *
 *****************/  

 echo ($_output);

}

catch (Exception $e)
{
 echo myExceptionHandling($_e,"../logs/error_log.csv");
}

?>
