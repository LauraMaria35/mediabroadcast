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
			<h1>Introdu în baza de date</h1>
			<form  method='post' action={$srv}>
			<label>Titlu:</label>
			<input type='text' name='titlu' placeholder ='titlu'>
			<br><br>
			<label>Articol</label> &nbsp;&nbsp;&nbsp;
								  <textarea name='articol' cols='100' rows='10' id='boodschap'></textarea>
			
			<br><br>
			<label>Sursa:</label>
			<input type='text' name='sursa' placeholder='sursa' >
			<br><br>
			&nbsp;&nbsp;
			<input type='submit' class='submit' name='submit' value='Adaugă' >
			</form>";
	}
		// input uitpakken
		else {
			$_titlu = $_POST['titlu'];
			$_titlu = str_replace('&', '&#38', $_titlu);
			$_titlu = str_replace(',', '&#44', $_titlu);
	
			$_articol = $_POST['articol'];
			$_articol = str_replace('&', '&#38', $_articol);
			$_articol = str_replace(',', '&#44', $_articol);
	
			$_sursa = $_POST['sursa'];
			$_sursa = str_replace('&', '&#38', $_sursa);
			$_sursa = str_replace(',', '&#44', $_sursa);

		// Query samenstellen
		$_query = createSelect(
			"t_articole",
			array($_titlu, $_articol, $_sursa), 
			array("d_titlu", "d_continut", "d_sursa"));
		
		// Query naar DB sturen
		$_result = $_PDO -> query($_query);
	
		if ($_result -> rowCount() > 0)
		{
			$_output = "<p>Articolul &quot;$_titlu&quot; se află în baza de date!</p>"; 
		}
		else
		{
			$_query = "INSERT INTO t_articole
			(d_titlu, d_continut, d_sursa)
	  VALUES ('$_titlu', '$_articol', '$_sursa')";

 $_PDO -> query($_query);
 $_output = "<section id=form><h2>Articolul $_titlu a fost introdus.</h2>";
 $_output .= "<br><br><br><br><a href='$_srv'>următorul</a>";
		}
			$_query = "SELECT * FROM t_articole ORDER BY d_index DESC";

		}
		/*	$_output = "<div id='mainHome1'>
			<br>
			<a href=articole.html><img id=sageata src='img/sageata.png' alt='sageata'><span>&nbsp;</span>Înapoi la lista cu articole</a>
			<br>
			<div id='articol'>
				<br>
				<h1>$_titlu</h1>
				<br>
				<br>
				<p>
					<br>
					$_articol
					<br>
					<br>
				</p>
				<br>
				<br>
				<a href=$_sursa
					target='_blank'><img src='img/external-link-pngrepo-com.png' alt='external link' width='25px' height='25px' id='link'><span>&nbsp;</span>link către articolul în engleză</a>
			</div>
			<br><br>
		 "; */
			
		
	

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
