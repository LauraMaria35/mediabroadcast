<?php
try
{
//********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];

	// database connection en selection
	require_once("../connections/pdo.inc.php"); 
	// zoek primary key voor t_gemeente  
	require_once("../php_lib/PK_t_gemeente.inc.php"); 

//********** Input en verwerking	
if (! isset($_POST["submitC"]) && ! isset($_POST["submitA"])) // geen enkel formulier 
{
  throw new Exception("illegal access");
}
  
if (isset($_POST["submitC"])) // bevestigings formulier
{
  $_cursist = $_POST['aanTepassen'];
  
  $_query = "Select * FROM v_cursisten WHERE d_cursist = '$_cursist'";

  $_result = $_PDO -> query($_query); 
  
  // verwerk resultaat 
  if ($_result -> rowCount() == 0)  
  {
		throw new Exception("database inconsistency"); 
  }
  
  while ($_row = $_result -> fetch(PDO::FETCH_ASSOC)) 
		{
			$_output = "
			<h1>Aanpassen</h1>
			<a href=C_aanpassen.php>Terug</a>
			<br><br>";
			$_output.= "
		    <form method='post' action='$_srv'>
			   <input type='hidden' name='aanTePassen' value='".$_row['d_cursist']."'>
			   <label>Naam</label>
			     <input type='text' name='naam' value='".$_row['d_naam']."'>
			   <label>Voornaam</label>
			     <input type='text' name='vnaam'value='".$_row['d_voornaam']."'>
        <label>Adres</label>
          <input type='text' name='straat'value ='".$_row['d_straat']."'>
          <input type='text' name='nr' value ='".$_row['d_nummer']."'>
        <label >Gemeente</label>
          <input type=text name='postcode' value ='".$_row['d_postnummer']."'>
          <input type=text name='gemeente' value='". $_row['d_gemeenteNaam']."'>
          <br>
		      <input type=submit class='submit'name=submitA value=Aanpassen>
        </form> 
    <br>
    ";
  }
}
else 
{
  $_cursist= $_POST['aanTePassen'];
  $_naam = $_POST['naam'];
  $_vnaam = $_POST['vnaam'];
  $_straat = $_POST['straat']; 
  $_nummer = $_POST['nr'];   
  $_postcode = $_POST['postcode'];
  $_gemeente = $_POST['gemeente'];
    
  //postcode en of gemeente omzetten naar correcte link (PK t_gemeente)  
  $_PK_gemeente = PK_t_gemeente($_postcode, $_gemeente);
		
// we updaten alle velden		
  $_query="UPDATE t_cursisten
								SET d_naam = '$_naam',
										d_voornaam = '$_vnaam',
										d_straat = '$_straat',
										d_nummer = '$_nummer',
										d_xnr = '$_xtr',
										d_gemeente = '$_PK_gemeente'		
								WHERE d_cursist = '$_cursist';";
  
  $_result = $_PDO -> query($_query);
    
//gegevens van cursist zijn aangepast		
  $_output = "De gegevens voor $_vnaam $_naam zijn aangepast";
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
