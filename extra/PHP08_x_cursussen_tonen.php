 <?php
try
{

/********************************************
*Initialisatie
*********************************************/
$_srv = $_SERVER['PHP_SELF'];

// exception handling funtions 
  include("../php_lib/myExceptionHandling.inc.php"); 
// database connection en selection
  include("../connections/pdo.inc.php");
  
// maak variabele selectie query
  include("../php_lib/createSelect.inc.php");  
  

/*******************************************
*    Input en verwerking
********************************************/

if (! isset($_POST["submit"]))  // formulier klaar maken
{
  $_output= "
<h1>Cursussen tonen</h1>  
<form  method='post' action='$_srv'>
<label>Cursus naam : </label>
<input type='text' name=cursusNaam>
<br>
<label>Cursis id  : </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type='text' name=cursusId>
<br><br>
<input type='submit' name='submit' value='Verzenden' >
</form>";

}

else // inhoud formulier verwerken
{
// input uitpakken
$_cursusNaam = $_POST['cursusNaam'];
$_cursusId = $_POST['cursusId'];
  
// Query samenstellen
$_query = createSelect(
        "t_cursus",
        array($_cursusNaam, $_cursusId), array("d_naam", "d_id"));


// Query naar DB sturen
$_result = $_PDO -> query("$_query");


// Resultaat verwerken
if ($_result -> rowCount() > 0)
{
  $_output = "";
  While ($_row = $_result -> fetch(PDO::FETCH_ASSOC))
  {
    $_output.=  $_row['d_naam']
 ."&nbsp;&nbsp;(".$_row['d_id'].")<br>Voorwaarde : ".$_row['d_voorwaarden']."<hr>";
  }
 }
  
 else
 {
   $_output = "Cursus niet gevonden";
 }
  
  
$_output .= "<br><a href='$_srv'>volgende</a>";
}

/*****************
 *   output      *
 *****************/

 echo ($_output);

}

catch (Exception $_e)
{
  echo myExceptionHandling($_e,"../logs/error_log.csv");
}

?>
