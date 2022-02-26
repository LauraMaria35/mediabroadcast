<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="//db.onlinewebfonts.com/c/cc4e55b58216e47bb86dc3ccdb3ba335?family=Utopian+Two+BW" rel="stylesheet"
        type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <script type="text/javascript" src="../js_lib/copyright.js"></script>
   
    <title>Media Broadcast</title>
</head>

<body>
    <div id="container">
        <header>
            <div id="titleNav">

                <div id="naam">
                    <h1>Media <br> Broadcast</h1>
                </div>
                <img src="../img/logo.jpeg" alt="logo news">

                <nav>
                    <div id="navHeader"></div>
                    <ul>
                        <li><a href="../html/index.html">Home</a></li>
                        <li><a href="../html/articole.html">Articole</a></li>
                        <li><a href="../html/materiale.html">Materiale</a></li>
                        <li><a href="../html/prezentari.html">Prezentări</a></li>
                        <li><a href="../html/contact.html">Contact</a></li>
                    </ul>

                </nav>

            </div>

        </header>
  
	<main id="mainArticole">
		<div class='categories'>
                <h4 onclick='politica()'>Politică</h4>
                <h4 onclick='sexism()'>Sexism</h4>
                <h4 onclick='feminism()'>Feminism</h4>
                <h4 onclick='gen()'>Identitate de gen</h4>
                <h4 onclick='contrafacerea()'>Contrafacerea</h4>
                <h4 onclick='clima()'>Schimbări climatice</h4>
                <h4 onclick='diverse()'>Diverse</h4>
            </div>
            <div id=searchBar>
                <input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for..'>
            </div>
            <div id='mainHome'>

                <div id=listaArticole>

                    <div id='internal'>
                    </div>
                    <div id=list>

                        <table id='myTable' width='900'>

                            <tr>
                                <th style='width:15%'>Data</th>
                                <th style='width:85%'>Titlu</th>
                            </tr>
           {$output}
		</ol>
                        </table>


                    </div>
                </div>
            </div>
    </div>
	</main>
  
	<footer>
		<script language="javascript">
			document.write(copyRight(" lauraciocalau.com"));
		</script>
		
	</footer>
  
</div>
<script type="text/javascript" src="../js_lib/script.js"></script>
</body>
</html>
