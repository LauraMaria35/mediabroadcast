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
  

/*******************************************
*    Input en verwerking
********************************************/

if (! isset($_POST["submit"]) && ! isset($_POST["submit_bev"]))  // formulier klaar maken
{
  $_output= "
<h1>Cursussen Verwijderen</h1>  
<form  method='post' action='$_srv'>
<label>Cursus naam : </label>
<input type='text' name=cursusNaam>
<br>
<label>Cursis id  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
<input type='text' name=cursusId>
<br><br>
<input type='submit' name='submit' value='Verzenden' >
</form>";

}

elseif (isset($_POST["submit"])) // inhoud eerste formulier verwerken
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
  if ($_result -> rowCount() <= 0)
  {
    $_output = "<p>De te verwijderen cursus zit niet in de database!</p>";
 
  }
  else
  {
    $_output = "";
    while ($_row = $_result -> fetch(PDO::FETCH_ASSOC))
    {
      $_output.= "<form  method='post' action='$_srv'>  
            <input type=hidden 
              name='teVerwijderen' value=".$_row['d_cursus'].">
            <input type=hidden 
              name=cursusNaam value=".$_row['d_naam'].">
            <input type=hidden
              name=cursusId value=".$_row['d_id'].">
            <input type='submit' 
              name=submit_bev value='Verwijder '>
        &nbsp;&nbsp;&nbsp;&nbsp;".
        $_row['d_naam']."&nbsp; (".$_row['d_id'].
        ")<hr></form>";
    }
  }
   
 }
 else // bevestigings formulier verwerken
 {
   $_teVerwijderen = $_POST['teVerwijderen'];
   $_cursusNaam = $_POST['cursusNaam'];
   $_cursusId = $_POST['cursusId'];
      
   $_query= "DELETE FROM t_cursus  WHERE d_cursus = $_teVerwijderen;";
      
// Query naar DB sturen
   $_result = $_PDO -> query("$_query");
      
   $_output = "Cursus $_cursusNaam ($_cursusId) is uit de database verwijderd";

 }
    
/*****************
 *   output      *
 *****************/
  
 $_output .= "<br><a href='$_srv'>volgende</a>";  

 echo ($_output);

}

catch (Exception $_e)
{
  echo myExceptionHandling($_e,"../logs/error_log.csv");
}


?>
