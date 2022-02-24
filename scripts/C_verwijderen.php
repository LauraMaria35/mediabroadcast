<?php
try
{
//*********  Initialisatie
  $_srv = $_SERVER['PHP_SELF'];
  // database connection en selection
  require_once("../connections/pdo.inc.php"); 
  // maak variabele selectie query
  require_once("../php_lib/createSelect.inc.php");  

//*********  Input en verwerking

  if (! isset($_POST["submitS"]) && ! isset($_POST["submitC"]))  // formulier klaar maken
  {
    $_output= "<h1>Verwijderen</h1>";
    $_output.= " 
      <form  method='post' action='$_srv'>
        <label>Voornaam : </label>
          <input type='text' name='vnaam' placeholder='voornaam'>
        <label>Naam  : </label>
          <input type='text' name='anaam' placeholder='naam'>
        <label>Straat : </label>
          <input type='text' name='straat' placeholder=straat >
            &nbsp;&nbsp
          <input type='text' name='nr' placeholder=nr>
        <label>Gemeente : </label>
          <input type='text' name='postcode' placeholder='postcode '>
            &nbsp;&nbsp
          <input type='text' name='gemeente' placeholder='gemeente'>
        <input type='submit' class='submit' name='submitS' value='Zoek' >
      </form>";
  }

  elseif (isset($_POST["submitS"])) // inhoud eerste formulier verwerken
  {
    // input uitpakken
    $_naam = $_POST['anaam'];
    $_vnaam = $_POST['vnaam'];
    $_straat = $_POST['straat'];
    $_nummer = $_POST['nr'];	
    $_postcode = $_POST['postcode'];
    $_gemeente = $_POST['gemeente'];

    // Query samenstellen
   $_query = createSelect(
			"v_cursisten",
			array($_naam, $_vnaam, $_postcode, $_gemeente,$_straat,$_nummer), 
			array("d_naam", "d_voornaam", "d_postnummer", "d_gemeenteNaam", "d_straat", "d_nummer"));

		// Query naar DB sturen
		$_result = $_PDO -> query("$_query");

    // Resultaat verwerken
    if ($_result -> rowCount() == 0)
    {
      $_output = "<p>De te verwijderen cursust zit niet in de database!</p>";
    }
    else
    {
      $_output = "<a class=terug href='$_srv'>Terug</a><br><br>";

      while ($_row = $_result -> fetch(PDO::FETCH_ASSOC))
      {
        $_output.= 
          "<article class='confInh'>".
          $_row['d_voornaam']."&nbsp; ".$_row['d_naam'].
          "<br>".
          $_row['d_straat']."&nbsp; ". 
          $_row['d_nummer']. 
          "<br>". 
          $_row['d_postnummer']."&nbsp; ".$_row['d_gemeenteNaam'].
          "</article>
          <article class='confBut'>
            <form  method='post' action='$_srv'>  
              <input type=hidden name='teVerwijderen' value=".$_row['d_cursist'].">
              <input type=hidden name='aNaam' value=".$_row['d_naam'].">
              <input type=hidden name='vNaam' value=".$_row['d_voornaam'].">
              <input type='submit'  name='submitC' value='Verwijderen'>
            </form>
				</article>
        <div class='clearfix'></div>
        <br><hr>";
      }
    } 
  }
  else // bevestigings formulier verwerken
  {
    $_teVerwijderen = $_POST['teVerwijderen'];
    $_aNaam = $_POST['aNaam'];
    $_vNaam = $_POST['vNaam'];

    $_query= "DELETE FROM t_cursisten  WHERE d_cursist = $_teVerwijderen;";

    // Query naar DB sturen
    $_result = $_PDO -> query("$_query");

    $_output = "Cursist $_vNaam $_aNaam is uit de database verwijderd";
  }

  //*********  output	
  require("../smarty/mySmarty.inc.php");
  $_smarty->assign('output', $_output);
  $_smarty->display('basisAppl.tpl');
}

catch (Exception $_exception) // exception handling
{
  require_once("../php_lib/myExceptionHandling.inc.php"); 
}
?>
