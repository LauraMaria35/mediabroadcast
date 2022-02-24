<?php
try
{
//********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];

	// database connection en selection
	require_once("../connections/pdo.inc.php");

	// maak variabele selectie query
	require_once("../php_lib/createSelect.inc.php");  

//********** Input en verwerking

	if (! isset($_POST["submit"]))  // formulier klaar maken
	{
		$_output= "<h1>Tonen</h1>";
		$_output.= "  
<form  method='post' action='$_srv'>
<label>Voornaam : </label>
<input type='text' name='vnaam'placeholder='voornaam' >
<label>Naam  : </label>
<input type='text' name='anaam' placeholder='naam' >
<label>Straat : </label>
<input type='text' name='straat' placeholder='straat' >
&nbsp;&nbsp
<input type='text' name='nr' placeholder='nr'>
<label>Gemeente : </label>
<input type='text' name='postcode' placeholder='postcode' >
&nbsp;&nbsp
<input type='text' name='gemeente' placeholder='gemeente'>

<input type='submit' class='submit' name='submit' value='Toon' >
</form>";
	}
	else // inhoud formulier verwerken
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
		if ($_result -> rowCount() > 0)
		{
			$_output = "";
			While ($_row = $_result -> fetch(PDO::FETCH_ASSOC))
			{
				$_output.=  
					$_row['d_voornaam'].
					"&nbsp;&nbsp;".
					$_row['d_naam'].
					"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
					$_row['d_straat']. 
					"&nbsp;&nbsp;".
					$_row['d_nummer'].
					"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
					$_row['d_postnummer']. 
					"&nbsp;&nbsp;".
					$_row['d_gemeenteNaam'].
					"</br>";

			}
		}

		else
		{
			$_output = "Cursist niet gevonden";
		}

		$_output .= "<br><br><br><br><a href='$_srv'>volgende</a>";
	}

//********** output
	require("../smarty/mySmarty.inc.php");
	$_smarty->assign('output', $_output);
	$_smarty->display('basisAppl.tpl');

}

catch (Exception $_exception) //********** exception handling
{
	include("../php_lib/myExceptionHandling.inc.php"); 
}
?>
