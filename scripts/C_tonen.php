<?php
try
{
//********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];
$_output = "";
	// database connection en selection
	require_once("../connections/pdo.inc.php");

	// maak variabele selectie query
	require_once("../php_lib/createSelect.inc.php");  

//********** Input en verwerking

	if (!isset($_POST["submit"]))  // formulier klaar maken
	{
			$_output = " 
			<h1>Caută următorul articol:</h1>
			<form  method='post' action={$srv}>
			<label>Titlu:</label>
			<input type='text' name='titlu' placeholder ='titlu'>
			<br><br>
			
			&nbsp;&nbsp;
			<input type='submit' class='submit' name='submit' value='Arată' >
			</form>";
	}
		// input uitpakken
		else {
		// input uitpakken
		$_titlu = $_POST['titlu'];
		$_articol = $_POST['articol'];
		$_sursa = $_POST['sursa'];

		// Query samenstellen
		$_query = createSelect(
			"t_articole",
			array($_titlu, $_articol, $_sursa), 
			array("d_titlu", "d_continut", "d_sursa"));

		// Query naar DB sturen
		$_result = $_PDO -> query("$_query");

		// Resultaat verwerken
		if ($_result -> rowCount() > 0)
		{
			$_output = "<div id='mainHome1'>
			<br>
			<a href=articole.html><img id='sageata' src='img/sageata.png' alt='sageata'><span>&nbsp;</span>Înapoi la lista cu articole</a>
			<br>
			<div id='articol'>
				<br>
				<h1>$_titlu</h1>
				<br>
				<br>
				<p>
					<br>
					$_articol
					<br></br>
				</p>
				<br>
				<br>
				<a href='' target='_blank'><img src='img/external-link-pngrepo-com.png' alt='external link' width='25px' height='25px' id='link'><span>&nbsp;</span>$_sursa</a>
			</div>
			<br><br>";
			}
		
		else
		{
			$_output = "Articolul nu a fost găsit";
		}

		$_output .= "<br><br><br><br><a href='$_srv'>următorul</a>";
	}
		
//********** output
	require("../smarty/mySmarty.inc.php");
	$_smarty->assign('srv', $_srv);
	$_smarty->assign('titlu', $_titlu);
	$_smarty->assign('articol', $_articol);
	$_smarty->assign('sursa', $_sursa);
	$_smarty->assign('output', $_output);
	$_smarty->display('basisAppl.tpl');

}

catch (Exception $_exception) //********** exception handling
{
	include("../php_lib/myExceptionHandling.inc.php"); 
}
?>
